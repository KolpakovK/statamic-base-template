<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Process\Process;

class RebuildStylesController extends Controller
{
    public function execute(Request $request): JsonResponse
    {
        $results = [];
        $allSuccessful = true;

        try {
            // 1. Build styles using shell_exec approach
            $results[] = 'Building styles...';
            
            $workingDirectory = base_path();
            $oldDir = getcwd();
            chdir($workingDirectory);
            
            // Try different build approaches for cross-platform compatibility
            $buildCommands = [
                'cmd /c "npm run build"',
                'powershell -Command "npm run build"',
                'npm.cmd run build',
                'npm run build'
            ];
            
            $buildSuccess = false;
            $lastError = '';
            
            // Cross-platform npm command detection
            $isWindows = PHP_OS_FAMILY === 'Windows';
            $npmCommand = $isWindows ? 'npm.cmd' : 'npm';
            
            $process = new Process([$npmCommand, 'run', 'build'], $workingDirectory);
            $process->setTimeout(120); // 2 minutes timeout
            
            // Set environment variables for better compatibility
            $process->setEnv([
                'NODE_ENV' => 'production',
                'PATH' => getenv('PATH')
            ]);
            
            try {
                $process->run();
                
                if ($process->isSuccessful()) {
                    $output = $process->getOutput();
                    if (stripos($output, 'built in') !== false || stripos($output, 'build completed') !== false) {
                        $results[] = '[SUCCESS] Styles built successfully';
                        $buildSuccess = true;
                    } else {
                        $results[] = '[SUCCESS] Build process completed';
                        $buildSuccess = true;
                    }
                } else {
                    $lastError = $process->getErrorOutput() ?: $process->getOutput() ?: 'Build process failed';
                }
            } catch (\Exception $e) {
                $lastError = 'Process execution failed: ' . $e->getMessage();
            }
            
            // Fallback to shell_exec if Process failed
            if (!$buildSuccess) {
                $results[] = 'Trying fallback build method...';
                
                $fallbackCommands = $isWindows 
                    ? ['npm.cmd run build', 'cmd /c "npm run build"']
                    : ['npm run build', '/usr/bin/npm run build', '/usr/local/bin/npm run build'];
                
                foreach ($fallbackCommands as $command) {
                    $output = shell_exec($command . ' 2>&1');
                    
                    if ($output && (stripos($output, 'built in') !== false || stripos($output, 'build completed') !== false)) {
                        $results[] = '[SUCCESS] Styles built successfully (fallback)';
                        $buildSuccess = true;
                        break;
                    } elseif ($output && stripos($output, 'error') === false && stripos($output, 'command not found') === false && stripos($output, 'не является') === false) {
                        $results[] = '[SUCCESS] Build completed (fallback)';
                        $buildSuccess = true;
                        break;
                    }
                }
                
                if (!$buildSuccess) {
                    $cleanError = preg_replace('/[^\x20-\x7E\s]/', '', $lastError);
                    $results[] = '[ERROR] Build failed: ' . trim($cleanError);
                    $allSuccessful = false;
                }
            }
            
            chdir($oldDir);

            // 2. Generate sitemap
            $results[] = 'Generating sitemap...';
            try {
                Artisan::call('sitemap:generate', ['--save' => true]);
                $results[] = '[SUCCESS] Sitemap generated successfully';
            } catch (\Exception $e) {
                $results[] = '[ERROR] Sitemap generation failed: ' . $e->getMessage();
                $allSuccessful = false;
            }

            // Clean results for JSON encoding
            $cleanResults = array_map(function($result) {
                return mb_convert_encoding($result, 'UTF-8', 'UTF-8,Windows-1251,ISO-8859-1');
            }, $results);

            return response()->json([
                'success' => $allSuccessful,
                'message' => $allSuccessful 
                    ? 'Build process completed successfully!' 
                    : 'Build process completed with some errors',
                'details' => $cleanResults
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error during build process: ' . $e->getMessage(),
                'details' => $results
            ]);
        }
    }
}
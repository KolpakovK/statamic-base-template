<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class RebuildStylesControllerBackup extends Controller
{
    public function execute(Request $request): JsonResponse
    {
        $results = [];
        $allSuccessful = true;

        try {
            // 1. Build styles using shell_exec as fallback
            $results[] = 'Building styles...';
            
            $workingDirectory = base_path();
            $oldDir = getcwd();
            chdir($workingDirectory);
            
            // Try different approaches
            $buildCommands = [
                'npm run build 2>&1',
                'npx vite build 2>&1',
                './node_modules/.bin/vite build 2>&1'
            ];
            
            $buildSuccess = false;
            $lastError = '';
            
            foreach ($buildCommands as $command) {
                $output = shell_exec($command);
                
                if ($output && !stripos($output, 'not found') && !stripos($output, 'error')) {
                    $results[] = '✓ Styles built successfully';
                    $buildSuccess = true;
                    break;
                } else {
                    $lastError = $output;
                }
            }
            
            if (!$buildSuccess) {
                $results[] = '✗ Build failed: ' . $lastError;
                $allSuccessful = false;
            }
            
            chdir($oldDir);

            // 2. Generate sitemap
            $results[] = 'Generating sitemap...';
            try {
                Artisan::call('sitemap:generate', ['--save' => true]);
                $results[] = '✓ Sitemap generated successfully';
            } catch (\Exception $e) {
                $results[] = '✗ Sitemap generation failed: ' . $e->getMessage();
                $allSuccessful = false;
            }

            return response()->json([
                'success' => $allSuccessful,
                'message' => $allSuccessful 
                    ? 'Build process completed successfully!' 
                    : 'Build process completed with some errors',
                'details' => $results
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
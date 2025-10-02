<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Artisan;

class RebuildStylesController extends Controller
{
    public function execute(Request $request): JsonResponse
    {
        $results = [];
        $allSuccessful = true;

        try {
            // 1. Build styles
            $results[] = 'Building styles...';
            $command = ['npm', 'run', 'build'];
            $workingDirectory = base_path();

            $process = new Process($command, $workingDirectory);
            $process->setTimeout(300); // 5 minutes timeout
            $process->run();

            if ($process->isSuccessful()) {
                $results[] = '✓ Styles built successfully';
            } else {
                $results[] = '✗ Build failed: ' . $process->getErrorOutput();
                $allSuccessful = false;
            }

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
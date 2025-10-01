import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/site.css', 'resources/js/site.js', 'resources/js/alpine.min.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

// Vite configuration
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'], // Ensure correct paths
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            protocol: 'ws', // Use WebSockets for hot module replacement (HMR)
            host: 'localhost', // Localhost for development
        },
    },
});

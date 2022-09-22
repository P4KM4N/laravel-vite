import { defineConfig } from 'vite';
import { splitVendorChunkPlugin } from 'vite'
import laravel from 'laravel-vite-plugin';
import path from 'path'


export default defineConfig({
    /* Marche pas le SSL :( */
    /* server: { 
        https: true, 
        host: 'localhost', 
    },  */
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/main.css',
                'resources/js/app.js',
                'resources/js/home.js',
                'resources/js/about.js',
            ],
            refresh: true,
        }),
        splitVendorChunkPlugin()
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '@': '/resources/',
        }
    },
});
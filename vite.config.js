import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // CSS principal
                'resources/css/app.css',

                // CSS communs
                'resources/css/reset.css',
                'resources/css/navigation.css',
                'resources/css/footer.css',
                'resources/css/blobAnimation.css',

                // CSS spécifiques aux pages
                'resources/css/home.css',
                'resources/css/contact.css',
                'resources/css/qui-suis-je.css',
                'resources/css/faq.css',
                'resources/css/error.css',

                // Gestion des cookies
                'resources/css/cookies-policy.css',
                'resources/css/cookies-banner.css',

                // JavaScript
                'resources/js/app.js',
                'resources/js/main.js',
                'resources/js/blobs-animations.js',
                'resources/js/txt-animations.js',

            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});

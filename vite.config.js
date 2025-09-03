import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import liveReload from 'vite-plugin-live-reload'
export default defineConfig({
    plugins: [
        tailwindcss(),
        liveReload('resources/view/**/*.{html,php}')
    ],
    publicDir: false,
    build: {
        outDir: './public/dist',
        manifest: true,
        rollupOptions: {
            input: [
                './resources/js/app.js',
                './resources/js/prism.js',
                './resources/css/app.css',
                './resources/css/prism.css'
            ],
        },
    },
    server: {
        hmr: {
            host: 'localhost'
        }
    }
})
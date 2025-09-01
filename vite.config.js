import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
export default defineConfig({
    plugins: [tailwindcss()],
    publicDir: false,
    build: {
        outDir: './public/dist',
        manifest: true,
        rollupOptions: {
            input: [
                './resources/js/app.js',
                './resources/css/app.css'
            ],
        },
    },
    server: {

    }
})
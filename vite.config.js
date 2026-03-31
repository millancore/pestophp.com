import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import liveReload from 'vite-plugin-live-reload'
import { writeFileSync, unlinkSync, existsSync } from 'node:fs'
import { join } from 'node:path'

export default defineConfig({
    plugins: [
        tailwindcss(),
        liveReload('resources/view/**/*.{html,php}'),
        {
            name: 'hot-file',
            configureServer(server) {
                const hotFile = join(process.cwd(), 'public/hot')
                const { config } = server
                const protocol = config.server.https ? 'https' : 'http'
                const host = config.server.host || 'localhost'
                const port = config.server.port || 5173
                const url = `${protocol}://${host}:${port}`

                writeFileSync(hotFile, url)

                const removeHotFile = () => {
                    if (existsSync(hotFile)) {
                        unlinkSync(hotFile)
                    }
                }

                process.on('SIGINT', () => {
                    removeHotFile()
                    process.exit()
                })
                process.on('SIGTERM', () => {
                    removeHotFile()
                    process.exit()
                })
                process.on('exit', () => {
                    removeHotFile()
                })

                server.httpServer?.on('close', removeHotFile)
            }
        }
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
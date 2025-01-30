import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
    ],
    server: {
        proxy: {
            '\\/api': { // Correção para Windows
                target: 'http://localhost:8000',
                changeOrigin: true,
                rewrite: (path) => path.replace(/^\\\/api/, ''),
            },
        },
    },
    base: '/Curriculo-Online/' // Adicione esta linha, alterando para o nome do seu repositório se for diferente
});
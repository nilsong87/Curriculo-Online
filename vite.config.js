import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css', // Se você tiver um CSS principal para o Vite processar
            'resources/js/app.js',   // Se você tiver um JS principal para o Vite processar
        ]),
    ],
    // Remova ou comente a linha abaixo se não estiver usando um framework como Vue ou React
    // resolve: {
    //     alias: {
    //         vue: 'vue/dist/vue.esm-bundler.js',
    //     },
    // },
});
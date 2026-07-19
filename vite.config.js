import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
    ],

    build: {
        outDir: 'js',
        emptyOutDir: true,

        rollupOptions: {
            input: 'src/main.js',

            output: {
                entryFileNames: 'kinship.js',
                chunkFileNames: '[name].js',
                assetFileNames: '[name].[ext]',
            },
        },
    },
});

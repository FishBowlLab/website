import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/blocklyBase.js',
                'resources/js/blocklyGraph.js',
                'resources/js/blockly/blockly_compressed.js',
                'resources/js/blockly/blocks_compressed.js',
                'resources/js/blockly/msg/en.js',
            ],
            refresh: true,
        }),
    ],
    build: {
      rollupOptions: {
        output:{
          entryFileNames: `assets/[name].js`,
          chunkFileNames: `assets/[name].js`,
          assetFileNames: `assets/[name].[ext]`
        }
      }
    },
});
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
const path = require('path');
let glob = require('glob');
export default defineConfig({
    resolve:{
        alias:{
            '@modules' : path.resolve(__dirname + '/Modules'),
            '@' : __dirname+'/resources/js'
        },
    },
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
// glob.sync('./Modules/*/*/vite.config.js').forEach(item => require(item));

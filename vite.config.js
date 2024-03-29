import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
const path = require('path');
let glob = require('glob');
export default defineConfig({
    build: {
        //outDir: 'public/assets/build/all',
        emptyOutDir: true,
        manifest: true,
    },
    resolve:{
        alias:{
            '@modules' : path.resolve(__dirname + '/Modules'),
            '@erp' : path.resolve(__dirname + '/Modules/Erp/Resources/Vuejs'),
            '@admin' : path.resolve(__dirname + '/Modules/Admin/Resources/Vuejs'),
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
           // buildDirectory: 'assets/build/all',
            input: [
                'Modules/Admin/Resources/Vuejs/admin.js',
                'Modules/Admin/Resources/Vuejs/css/main.css',
                'Modules/Erp/Resources/Vuejs/app.js',
                'Modules/Erp/Resources/Vuejs/css/main.css',

            ],

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

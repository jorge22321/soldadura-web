import { defineConfig } from 'vite';

import laravel from 'laravel-vite-plugin';

import vue from '@vitejs/plugin-vue';

import Inspector from 'vite-plugin-vue-inspector';


export default defineConfig({

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


        Inspector({

            enabled: true,

            toggleButtonVisibility: 'always',

            toggleButtonPos: 'bottom-left',

            launchEditor: 'code',

            // IMPORTANTE EN LARAVEL
            appendTo: 'resources/js/app.js',

        }),

    ],

});
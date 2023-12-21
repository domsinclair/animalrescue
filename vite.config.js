import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import { liveDesigner } from "@pinegrow/vite-plugin";
import { fileURLToPath, URL } from "node:url";
import AutoImportComponents from "unplugin-vue-components/vite";
import { PrimeVueResolver } from "unplugin-vue-components/resolvers";

export default defineConfig({
    plugins: [
        liveDesigner({
            tailwindcss: {
                /* Please ensure that you update the filenames and paths to accurately match those used in your project. */
                configPath: "tailwind.config.js",
                cssPath: "resources/css/app.css",
                // themePath: false, // Set to false so that Design Panel is not used
                // restartOnConfigUpdate: true,
                restartOnThemeUpdate: true,
            },
            //...
            devServerUrls: {
                local: "http://127.0.0.1:8000",
            },
            dirs: {
                src: "resources/js/",
                layouts: "resources/js/Layouts",
                pages: "resources/js/Pages",
                components: "resources/js/Components",
            },
            startupPage: "@/Pages/Welcome.vue",
        }),
        laravel({
            input: "resources/js/app.js",
            ssr: "resources/js/ssr.js",
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
        AutoImportComponents({
            /* Please ensure that you update the filenames and paths to accurately match those used in your project. */

            dirs: ["resources/js/components"],

            // allow auto load markdown components under ./src/components/
            extensions: ["vue", "md"],

            // allow auto import and register components used in markdown
            include: [/\.vue$/, /\.vue\?vue/, /\.md$/],

            resolvers: [PrimeVueResolver()], // Auto-import using resolvers
            dts: "components.d.ts",
        }),
    ],
    resolve: {
        alias: {
            /* Must be either an object, or an array of { find, replacement, customResolver } pairs. */
            /* Refer to: https://vitejs.dev/config/shared-options.html#resolve-alias */
            /* Please ensure that you update the filenames and paths to accurately match those used in your project. */
            "@": fileURLToPath(new URL("./resources/js", import.meta.url)),
            "~": fileURLToPath(new URL("./resources/js", import.meta.url)),
            "~~": fileURLToPath(new URL("./resources", import.meta.url)),
        },
    },
});

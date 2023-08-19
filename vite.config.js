import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/js/theme.js",
                "resources/utils/alpine.js",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "chart.js/auto": "chart.js/dist/chart.esm.js",
        },
    },
});

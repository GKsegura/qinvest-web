import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/js/theme.js",
                "resources/lib/alpine.js",
                "resources/js/selic.js",
                "resources/js/api.js",
                "resources/js/profile.js",
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

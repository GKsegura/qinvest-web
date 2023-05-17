import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/sass/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});

const { createVuePlugin } = require("vite-plugin-vue");

module.exports = {
    plugins: [createVuePlugin()],
};

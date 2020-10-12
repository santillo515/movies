const mix = require("laravel-mix");

/*require("laravel-mix-tailwind");*/
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/*mix.js("resources/js/app.js", "public/js/app.js")
    .sass("resources/sass/app.scss", "public/css/app.css")
    .tailwind("./tailwind.config.js")
    .sourceMaps();*/
mix.postCss('resources/css/main.css', 'public/css/main.css')
    .options({
        postCss: [require('tailwindcss')]
    })
    .purgeCss({
        enabled: mix.inProduction(),
    });

if (mix.inProduction()) {
    mix.version();
}

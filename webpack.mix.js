const mix = require('laravel-mix');
const path = require('path');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js("resources/js/app.js", "public/js")
 .vue()
 .postCss("resources/css/app.css", "public/css", [
     //
 ]);

mix.webpackConfig({
 output: {
     chunkFilename: "js/[name].js?id=[chunkhash]",
 },
 resolve: {
    alias: {
    ziggy: path.resolve('vendor/tightenco/ziggy/dist/vue'),
    },
},
 
});
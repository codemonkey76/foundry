const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .copy('resources/template/img', 'public/img')
    .copy('resources/template/video', 'public/video')
    .copy('resources/template/css', 'public/css')
    .copy('resources/template/js', 'public/js')
    .copy('resources/template/fonts', 'public/fonts')
    .sass('resources/sass/app.scss', 'public/css');

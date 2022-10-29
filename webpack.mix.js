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
    .vue()
    .sass('resources/sass/app.scss', 'public/css').options({
    processCssUrls: false
});
mix.sass('resources/css/staticapp.scss', 'public/css/static');
mix.js('resources/js/appdemo.js', 'public/js')
    .vue()
    .sass('resources/sass/demoapp.scss', 'public/css').options({
    processCssUrls: false
});
const mix = require('laravel-mix');

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

mix.scripts('resources/js/app.js', 'public/js/app.js')
    .sass('resources/scss/style.scss', 'public/css');

// mix.copyDirectory('resources/images', 'public/images');
mix.copyDirectory('resources/icons', 'public/icons')
    .copyDirectory('resources/fonts', 'public/fonts');

// lib Uikit
mix.copy('node_modules/uikit/dist/css/uikit.min.css','public/css/uikit.min.css')
    .copy('node_modules/uikit/dist/js/uikit.min.js', 'public/js/uikit.min.js')
    .copy('node_modules/uikit/dist/js/uikit-icons.min.js', 'public/js/uikit-icons.min.js');

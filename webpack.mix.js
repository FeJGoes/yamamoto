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

mix.scripts('resources/js/app.js', 'public/js/app.js').version()
    .sass('resources/scss/style.scss', 'public/css').version();

mix.copyDirectory('resources/images', 'public/images')
    .copyDirectory('resources/archive', 'public/archive')
    .copyDirectory('resources/icons', 'public/icons')
    .copyDirectory('resources/fonts', 'public/fonts');

mix.copy('resources/videos/video-header.mp4', 'public/videos/video-header.mp4')

// lib Uikit
mix.copy('node_modules/uikit/dist/css/uikit.min.css','public/css/uikit.min.css')
    .scripts([
        'node_modules/uikit/dist/js/uikit.min.js',
        'node_modules/uikit/dist/js/uikit-icons.min.js'
    ], 'public/js/uikit.min.js')

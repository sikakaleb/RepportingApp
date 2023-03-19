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

mix.js('resources/js/chart.js', 'public/js')
mix.js('resources/js/dashboard.js', 'public/js')
mix.js('resources/js/file-upload.js', 'public/js')
mix.js('resources/js/hoverable-collapse.js', 'public/js')
mix.js('resources/js/jquery.cookie.js', 'public/js')
mix.js('resources/js/off-canvas.js', 'public/js')
mix.js('resources/js/documentation.js', 'public/js')
mix.js('resources/js/tabs.js', 'public/js')
mix.js('resources/js/template.js', 'public/js')
mix.js('resources/js/todolist.js', 'public/js')
mix.js('resources/js/tooltips.js', 'public/js')
mix.css('resources/css/app.css', 'public/css')
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/style.css', 'public/css', [
        require('tailwindcss'), 
    ]);

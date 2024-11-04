let mix = require('laravel-mix');
mix.js('resources/js/**/*.js', 'public/js')
    .postCss('resources/css/output.css', 'public/css')

    
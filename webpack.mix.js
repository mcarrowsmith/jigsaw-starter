const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets');
mix.setResourceRoot('/assets');

mix.copy([
    'resources/images/'
], 'source/assets/images');

mix.jigsaw()
    .js('resources/js/app.js', 'js')
    .postCss('resources/css/app.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .version();

let mix = require('laravel-mix');

mix.setPublicPath('themes/captcha-marketing/assets');
mix.sass('themes/captcha-marketing/assets/scss/main.scss', 'css/app.css');

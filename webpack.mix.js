const mix = require('laravel-mix');
// require('laravel-mix-purgecss');

mix.options({
  processCssUrls: false
});

mix.disableNotifications();

mix.sass('assets/scss/style.scss', 'assets/css/all.min.css');

mix.js('assets/js/custom.js', 'assets/js/all.min.js')
    .sourceMaps();

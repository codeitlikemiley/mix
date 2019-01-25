const mix = require('laravel-mix');
require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
    // - [Read](https://laravel.com/docs/5.7/mix#working-with-scripts)
    .extract(['vue'])
    .postCss('resources/css/app.css', 'public/css')
    // - [Read](https://github.com/JeffreyWay/laravel-mix-tailwind)
    .tailwind()
    // - [Read](https://github.com/spatie/laravel-mix-purgecss)
    .purgeCss({
        enabled: true,
    });

if (mix.inProduction()) {
    // - [Read](https://laravel.com/docs/5.7/mix#versioning-and-cache-busting)
    mix.version();
}

const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
    mix.sass('admin.scss')
       .webpack('admin.js');
    mix.copy('resources/assets/image', 'public/image');
    mix.copy('resources/assets/vrplay', 'public/vrplay');
    mix.copy('./node_modules/bootstrap-sass/assets/fonts', 'public/fonts');
    mix.browserSync({
        proxy: '0.0.0.0:8000'
    });
});

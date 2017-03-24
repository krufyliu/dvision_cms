const elixir = require('laravel-elixir');

elixir.config.js.uglify.options.compace = false;
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
       .webpack('app.js')
       .scripts([
            'v2/v2_idangerous.swiper.js',
            'v2/v2_idangerous.swiper.progress.js',
            'v2/v2_scrollreveal.js',
            'v2/v2_index.js'
        ], 'public/js/index.js');

    mix.version(['public/js/app.js', 'public/js/index.js'])
    // mix.sass('admin.scss')
    //    .webpack('admin.js');
    mix.copy('resources/assets/img', 'public/img');
    // mix.copy('resources/assets/vrplay', 'public/vrplay');
    // mix.copy('resources/assets/vendor', 'public/vendor');
    // mix.copy('./node_modules/bootstrap-sass/assets/fonts', 'public/fonts');
    // mix.copy('./resources/assets/vendor/summernote/font', 'public/fonts');
    // mix.copy('./node_modules/font-awesome/fonts', 'public/fonts');
});

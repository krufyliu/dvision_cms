const elixir = require('laravel-elixir');
// const gulp = require('gulp');
// const livereload = require('gulp-livereload');
require('laravel-elixir-livereload');
require('laravel-elixir-imagemin');
// elixir.config.js.uglify.options.compace = false;
const gulp = require('gulp');
const  imagemin = require('gulp-imagemin');
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
    mix.sass('admin.scss')
       .webpack('admin.js');
    // mix.copy('resources/assets/img', 'public/img');
    // mix.imagemin("resources/assets/img", "public/img");
    mix.copy('resources/assets/vrplay', 'public/vrplay');
    mix.copy('resources/assets/vendor', 'public/vendor');
    // mix.copy('./node_modules/bootstrap-sass/assets/fonts', 'public/fonts');
    mix.copy('./resources/assets/vendor/summernote/font', 'public/fonts');
    mix.copy('./node_modules/font-awesome/fonts', 'public/fonts');
    mix.livereload();

    // gulp.src(['resources/assets/img/**/*.*'])
    //     .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
    //     .pipe(gulp.dest('public/img'));
});

// gulp.task('laravel-views', function() {
//     gulp.src('resources/views/*.blade.php')
//         .pipe(livereload());
// });

// gulp.task('live-monitor', function() {
//     livereload.listen();
//     gulp.watch('resources/views/**/*.blade.php', ['laravel-views']);
// });

gulp.task('image', () => {
  gulp.src(['resources/assets/img/**/*.*'])
    .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
    .pipe(gulp.dest('public/img'));
});
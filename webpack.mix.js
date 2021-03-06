let mix = require('laravel-mix');

const Clean = require('clean-webpack-plugin');
//const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */



mix.webpackConfig({
    plugins: [
        new Clean([
            'public/images',
            'public/assets',
            'public/dist',
            'public/fonts'
        ], {verbose: false}),
        //new UglifyJSPlugin()
    ],
})

mix
    .copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/assets/lib/bootstrap.min.css')
    .copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/assets/lib/bootstrap.min.js')
    .copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/assets/lib/font-awesome.min.css')
    .copy('node_modules/ionicons/dist/css/ionicons.min.css', 'public/assets/lib/ionicons.min.css')
    .copy('node_modules/popper.js/dist/umd/popper.min.js', 'public/assets/lib/popper.min.js')
    .copy('node_modules/jquery/dist/jquery.min.js', 'public/assets/lib/jquery.min.js')
    .copy('node_modules/axios/dist/axios.min.js', 'public/assets/lib/axios.min.js')
    .copyDirectory('node_modules/font-awesome/fonts', 'public/assets/fonts')
    .copyDirectory('node_modules/ionicons/dist/fonts', 'public/assets/fonts')
    .copyDirectory('resources/assets/fonts', 'public/fonts')
    .copyDirectory('resources/assets/images', 'public/images')
    .js('resources/assets/js/app.js', 'public/dist')
    .js('resources/assets/js/view-greek-ru.js', 'public/dist')
    .js('resources/assets/js/simphony.js', 'public/dist')
    .js('resources/assets/js/comment.js', 'public/dist')
    .sass('resources/assets/sass/app.scss', 'public/dist')
    .options({
        processCssUrls: false,
        uglify: true
    })
;
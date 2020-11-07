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

// mix.webpackConfig({
//     resolve: {
//         modules: [
//             path.resolve(__dirname, 'node_modules/bootstrap/dist'),
//             path.resolve(__dirname, 'node_modules/jquery/dist'),
//             path.resolve(__dirname, 'node_modules/vue/dist'),
//             path.resolve(__dirname, 'node_modules/axios/dist'),
//             path.resolve(__dirname, 'node_modules/lodash/dist'),
//             path.resolve(__dirname, 'node_modules/popper.js/dist')
//         ]
//     }
// });


mix.extract([
    'vue',
    'jquery',
    'bootstrap-vue',
    'lodash',
    '@popperjs/core',
    'portal-vue'
]).sourceMaps();

mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/scss/app.scss', 'public/css/app.css');
// mix.styles([
//'resources/css/app.css',
// ], 'public/css/all.css');

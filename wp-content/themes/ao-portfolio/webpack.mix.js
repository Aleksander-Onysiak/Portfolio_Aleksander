const mix = require('laravel-mix');

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

mix.js('src/js/main.js', 'dist/js/main.js')
  .sass('src/css/style.scss', 'dist/css/')
  .copy('src/font', 'dist/fonts')
  .copy('img', 'dist/img')
  .options({
      processCssUrls: false,
  })
  .webpackConfig({
      devServer: {
          port: '8080'
      }
  });
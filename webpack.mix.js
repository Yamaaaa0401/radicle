const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);
mix.less("resources/less/app.less", "public/css").less(
    "resources/less/admin.less",
    "public/css"
);
// sassメソッドは、SassをCSSへコンパイルします
mix.sass("resources/sass/app.scss", "public/css").sass(
    "resources/sass/admin.sass",
    "public/css/admin"
);
// stylusメソッドにより、StylusをCSSへコンパイルできます
mix.stylus("resources/stylus/app.styl", "public/css", {
    use: [require("rupture")()]
});

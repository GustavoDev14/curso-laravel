const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js/")
    .vue()
    .sass("resources/sass/app.scss", "public/css/")
    .options({
        processCssUrls: false,
    })
    .browserSync("http://curso.dev.com");

mix.copyDirectory("resources/images/", "public/images/");

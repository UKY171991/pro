const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('node_modules/admin-lte/dist/css/adminlte.min.css', 'public/css')
    .copy('node_modules/admin-lte/plugins', 'public/plugins')
    .copy('node_modules/admin-lte/dist/js/adminlte.min.js', 'public/js')
    .copy('node_modules/jquery/dist/jquery.min.js', 'public/js')
    .copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js')
    .version();

resolve: {
    extensions: ['.js', '.json', '.jsx','.scss']
}

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.scss']
    }
});



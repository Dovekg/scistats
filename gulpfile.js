var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;


elixir(function(mix) {
        mix.sass('app.scss');
        mix.styles([
            'bower_components/bootstrap/dist/css/bootstrap.min.css',
            'bower_components/font-awesome/css/font-awesome.min.css',
            'css/app.css',
            'css/multiple-select.css',
            'css/toastr.min.css',
        ], 'public/css/all.css','./public/');

        mix.scripts([
            'bower_components/jquery/dist/jquery.min.js',
            'bower_components/bootstrap/dist/js/bootstrap.min.js',
            'js/multiple-select.js',
            'js/toastr.min.js'
        ], 'public/js/all.js','./public/');

        mix.version([
            'css/all.css',
            'js/all.js'
        ]);
    });
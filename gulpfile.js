var elixir = require('laravel-elixir');
elixir(function(mix) {
        mix.sass('app.scss');
        mix.styles([
            'bower_components/bootstrap/dist/css/bootstrap.min.css',
            'bower_components/font-awesome/css/font-awesome.min.css',
            'css/app.css',
            'css/multiple-select.css'
        ], 'public/css/all.css','./public/');

        mix.scripts([
            'bower_components/jquery/dist/jquery.min.js',
            'bower_components/bootstrap/dist/js/bootstrap.min.js',
            'js/multiple-select.js'
        ], 'public/js/all.js','./public/');

        mix.version([
            'css/all.css',
            'js/all.js'
        ]);
    });
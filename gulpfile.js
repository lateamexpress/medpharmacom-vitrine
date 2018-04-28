const elixir = require('laravel-elixir');

elixir((mix) => {
    // Vitrine
    mix.sass([
        'vitrine/contact-form.scss'
    ], 'public/css/vitrine/contact-form.css')
        .sass([
            'vitrine/formation.scss'
        ], 'public/css/vitrine/formation.css')
        .sass([
            'vitrine/home.scss'
        ], 'public/css/vitrine/home.css')
        .sass([
            'vitrine/login.scss'
        ], 'public/css/vitrine/login.css')
        .sass([
            'vitrine/news.scss'
        ], 'public/css/vitrine/news.css')
        .sass([
            'vitrine/laboratoire.scss'
        ], 'public/css/vitrine/laboratoire.css')
        .sass([
            'vitrine/equivalence-generique.scss'
        ], 'public/css/vitrine/equivalence-generique.css');
});
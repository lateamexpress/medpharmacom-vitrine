<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('titre')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        @yield('specific-css')
    </head>
<body>
    <div class="preloader-wrapper big active" id="loader">
        <div class="spinner-layer spinner-custom">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
    <div id="container-all">
        <a href="#" id="back-to-top" title="Back to top"><i class="material-icons">arrow_drop_up</i></a>
        <nav id="menu">
            <div class="nav-wrapper">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo-new.jpg') }}" alt="medpharmacom-logo" title="medpharmacom-logo" id="logo-medpharmacom-menu"/>
                </a>
                <ul id="nav-mobile" class="left">
                    <li style="width:20%;"><a id="logo-home-pc" href="{{ url('/') }}"><img src="{{ asset('img/logo-new.jpg') }}" alt="medpharmacom-logo" title="medpharmacom-logo" id="logo-medpharmacom-menu-pc"/></a></li>
                    <li class="li-menu"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="li-menu"><a href="{{ url('formation') }}">Formation</a></li>
                    <li class="li-menu"><a href="{{ url('news') }}">Actualités</a></li>
                    <li class="li-menu"><a href="{{ url('equivalence-generique') }}">Equivalence générique</a></li>
                    <li class="li-menu"><a href="{{ url('laboratoire') }}">Laboratoire</a></li>
                    <li class="li-menu"><a href="{{ url('goodies') }}">Goodies</a></li>
                    <li class="li-menu"><a href="{{ url('contact') }}">Contact</a></li>
                    <li class="li-menu" id="burger-menu"><a href="#" data-activates="slide-out" class="button-collapse-side right"><i class="material-icons">menu</i></a></li>
                </ul>
            </div>
        </nav>
        <!-- START SIDE NAV -->
        <ul id="slide-out" class="side-nav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="https://www.sciencedaily.com/images/2016/05/160504085309_1_900x600.jpg">
                    </div>
                    <img class="circle" alt="avatar-login" title="avatar-login" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/8c/8cd2d593555cf702a6cf8231bc105d1897987ebf_medium.jpg">
                    <span style="color: rgba(0,0,0,0.87); font-weight: bold;">Liens de navigation</span>
                </div>
            </li>
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li><a href="{{ url('formation') }}">Formation</a></li>
            <li><a href="{{ url('news') }}">Actualités</a></li>
            <li><a href="{{ url('equivalence-generique') }}">Equivalence générique</a></li>
            <li><a href="{{ url('laboratoire') }}">Laboratoire</a></li>
            <li><a href="{{ url('contact') }}">Contact</a></li>
        </ul>
        <!-- END SIDE NAV -->
        @yield('contenu')
        @yield('contenu-container')
        <footer class="page-footer grey darken-3">
            <div class="container container-footer">
                <div class="row">
                    <div class="col l4 s12">
                        <h5 class="white-text">A propos de Medpharmacom</h5>
                        <p class="grey-text text-lighten-4">Ce site est réservé aux CE d'entreprise dans le domaine des professionnels de la santé.</p>
                    </div>
                    <div class="col l4 s12">
                        <h5 class="white-text">En savoir plus</h5>
                        <p class="grey-text text-lighten-4"></p>
                        <ul>
                            <li><a href="medpharmacom.ipmeo.com">Site web Medpharmacom</a></li>
                            <li><a href="ce-medpharmacom.ipmeo.com">Application CE</a></li>
                        </ul>
                    </div>
                    <div class="col l4 s12">
                        <h5 class="white-text">Nous contacter</h5>
                        <p class="grey-text text-lighten-4">53 Rue de Vauban 69006 Lyon</p>
                        <p class="grey-text text-lighten-4">Tel : 01 83 80 46 03 / 06 51 40 43 38 </p>
                        <p class="grey-text text-lighten-4">Siret : 812 261 535 Rcs Lyon</p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright grey darken-4">
                <div class="container">
                    © 2018 Medpharmacom.fr
                    <!-- Authors :
                    Moché Matagrin
                    Nicolas-Killian Duchassin
                    href="https://www.linkedin.com/in/k%C3%A9vin-dintanavong-539049115/     Kévin Dintanavong
                    -->
                    <a class="waves-effect waves-light btn btn-network" style="position:absolute; right: 37.5%" href="https://fr.linkedin.com/company/medpharmacom"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </footer>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('specific-js')
</body>
</html>
@extends('layout')

@section('titre')
    Laboratoire
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vitrine/laboratoire.css') }}">
@endsection

@section('contenu')

@endsection

@section('contenu-container')
    <div class="row">
        <div class="offset-l2 col m12 s12 l7 mt120" style="margin-bottom: 50vh;">
            <form method="post" action="{{ route('laboratoire.store') }}">
                {{ csrf_field() }}
                <h1 class="center-align">Trouvez un laboratoire</h1>
                <p>Saisissez le nom d'un laboratoire puis cliquez sur Afficher les résultats. Le résultat qui s'affichera ci-dessous, génèrera des cartouches avec les différentes informations.</p>
                <div class="input-field col s12 card-search mt50">
                    <i class="material-icons prefix">search</i>
                    <input name="laboratoire" id="laboratoire" name="laboratoire" type="text" class="validate">
                    <label for="laboratoire">Rechercher les laboratoires</label>
                    <div class="btn-laboratoire">
                        <button type="submit" class="waves-effect waves-light btn">Afficher les résultats</button>
                    </div>
                </div>
                <div class="row">
                @isset($laboratoire)
                    @foreach ($laboratoire as $labo)
                        <div class="col s12 m6 l4 mt50">
                            <div class="card">
                                <div class="card-image">
                                    @isset($labo['ref_id_image'])
                                        <img class="responsive-img" src="{{ asset('img/' . $labo->ref_id_image )}}">
                                    @else
                                        <img class="responsive-img" src="http://materializecss.com/images/sample-1.jpg">
                                    @endisset
                                </div>
                                <div class="card-content">
                                    <ul>
                                        <li>{{ $labo['nom'] }}</li>
                                        <li>Tél : {{ $labo['tel'] }}</li>
                                        <li>FAX : {{ $labo['fax'] }}</li>
                                        <li>Adresse : {{ $labo['adresse'] }}</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    @isset($labo['site'])
                                        <a href="{{ $labo['site'] }}">Lien laboratoire</a>
                                        @else
                                        <a href="#">Lien laboratoire</a>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
                </div>
            </form>
        </div>
    </div>
@endsection
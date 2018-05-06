@extends('layout')

@section('titre')
    Equivalence générique
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vitrine/equivalence-generique.css') }}">
@endsection

@section('contenu')

@endsection

@section('contenu-container')
    <div class="row">
        <div class="offset-l2 col m12 s12 l7 mt120" style="margin-bottom: 50vh;">
            <form method="post" action="{{ url('equivalence-generique')}}">
                {{ csrf_field() }}
                <h1 class="center-align">Trouvez la correspondance médicament - générique / générique - médicament</h1>
                <p>Saisissez le nom d'un générique ou d'un médicament puis cliquez sur l'un des deux boutons pour effectuer la recherche. Le résultat qui s'affichera ci-dessous, génèrera des cartouches avec les différentes informations.</p>
                <div class="input-field col s12 card-search mt50">
                    <i class="material-icons prefix">search</i>
                    <input id="equivalence-generique" name="equivalence-generique" type="text" class="validate">
                    <label for="equivalence-generique">Equivalence générique</label>
                    <div class="btn-equivalence-generique">
                        <input type="submit" id="Generique" name="Generique" class="waves-effect waves-light btn" value="Generique"/>
                        <input type="submit" id="Medicament" name="Medicament" class="waves-effect waves-light btn" value="Medicament"/>
                    </div>
                </div>
                <div class="row">
                    @isset($medicament)
                        @foreach ($medicament as $med)
                            <div class="col s12 l3 m4 mt50">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="http://saint-andre-d-olerargues.com/wpdossier/wp-content/uploads/2015/03/paracetamole.jpg">
                                        <span class="card-title">{{ $med['actif'] }}</span>
                                    </div>
                                    <div class="card-content">
                                        <p>{{ $med['title'] }}</p>
                                        <p>{{ $med['classe'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                    @isset($generique)
                            @foreach ($generique as $gen)
                                <div class="col s12 m4 l3 mt50">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="http://saint-andre-d-olerargues.com/wpdossier/wp-content/uploads/2015/03/paracetamole.jpg">
                                            <span class="card-title">{{ $gen['actif'] }}</span>
                                        </div>
                                        <div class="card-content">
                                            <p>{{ $gen['title'] }}</p>
                                            <p>{{ $gen['classe'] }}</p>
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
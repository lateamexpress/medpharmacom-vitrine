@extends('layout')

@section('titre')
    Goodies
@endsection

@section('specific-css')
    <link href="{{ asset('css/vitrine/goodies.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('contenu')

@endsection

@section('contenu-container')
    <div class="container center-align">
        <div class="row">
            <div class="col s12" style="margin-top: 130px;">
                <h1>Recupérez vos goodies en faisant votre demande <a href="{{ url('contact') }}">ici</a> </h1>
                <div class="divider-custom"></div>
                <div class="mt20">
                    <div class="col l6 s12">
                        <img class="responsive-img goodies-img" src="{{ asset('img/goodies1.jpg') }}">
                        <br>
                        <span class="name-goodies">Cable USB Medpharmacom</span>
                    </div>
                    <div class="col l6 s12">
                        <img class="responsive-img goodies-img" src="{{ asset('img/goodies2.jpg') }}">
                        <br>
                        <span class="name-goodies">Notebook Medpharmacom</span>
                    </div>
                    <div class="col l6 s12 mt50">
                        <img class="responsive-img goodies-img" src="{{ asset('img/goodies3.jpg') }}">
                        <br>
                        <span class="name-goodies">Stylo Medpharmacom</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
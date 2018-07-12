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
                        <img class="responsive-img goodies-img" src="{{ asset('img/test.png') }}">
                        <br>
                        <span class="name-goodies">Cable USB Medpharmacom</span>
                    </div>
                    <div class="col l6 s12">
                        <img class="responsive-img goodies-img" src="{{ asset('img/test2.png') }}">
                        <br>
                        <span class="name-goodies">Notebook Medpharmacom</span>
                    </div>
                    <div class="col l6 mt50 s12">
                        <img class="responsive-img goodies-img" src="{{ asset('img/test3.png') }}">
                        <br>
                        <span class="name-goodies">Stylo Medpharmacom</span>
                    </div>
                    <div class="col s12 l6 mt50" id="contact-form">
                        @if (Session::has('flash_message'))
                            <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                        @endif
                        <form class="col s12" id="contact" method="post" action="{{ route('contact.store') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="input-field col l12 s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" name="name" type="text" class="validate">
                                    @if ($errors->has('name'))
                                        <small class="form-text invalid-feedback">{{ $errors->first('name')}}</small>
                                    @endif
                                    <label for="icon_prefix">Nom *</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col l12 s12">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" type="email" name="email" class="validate">
                                    @if ($errors->has('email'))
                                        <small class="form-text invalid-feedback">{{ $errors->first('email')}}</small>
                                    @endif
                                    <label for="email">Email *</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col l12 m12 s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="message" name="message" class="materialize-textarea"></textarea>
                                    @if ($errors->has('message'))
                                        <small class="form-text invalid-feedback">{{ $errors->first('message')}}</small>
                                    @endif
                                    <label for="message">Votre message *</label>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
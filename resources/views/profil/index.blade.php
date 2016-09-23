@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>Votre Profil</h1>
                    <ul class="list-group">
                        <li class="list-group-item">First Name : {{ Auth::user()->name }} </li>
                        <li class="list-group-item">Family Name : {{ Auth::user()->fname }} </li>
                        <li class="list-group-item">Adresse Mail : {{ Auth::user()->email }} </li>
                        <li class="list-group-item">Mot de Passe : {{ Auth::user()->password }}</li>
                        <li class="list-group-item">Nombre d'événements créés : </li>
                        <li class="list-group-item">Nombre d'événements passés : </li>
                        <li class="list-group-item">Nombre d'événements à venir : </li>

                        <br>

                        <a href="#">Modifier le profil </a>
                </div>
            </div>
        </div>
    </div>
@endsection
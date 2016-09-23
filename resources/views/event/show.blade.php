@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <a href="{{route('event.index')}}">Retour à la liste</a>

            <h1>Le projet <b>{{$event->name}}</b></h1>
            <ul class="list-group">
                <li class="list-group-item">Nom: {{ $event->name }}</li>
                <li class="list-group-item">Nombre d'invités: {{ $event->nbPerson }}</li>
                <li class="list-group-item">Nombre de table: {{ $event->nbTable }}</li>
                <li class="list-group-item">Type d'évenement: {{ $event->type }}</li>
                <li class="list-group-item">Date de l'évenement: {{ $event->date }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection

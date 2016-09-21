@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Vos projets</h1>
            <ul class="list-group">
                <li class="list-group-item">First item</li>
                <li class="list-group-item">Second item</li>
                <li class="list-group-item">Third item</li>
                <br>
                <a href="{{route('event.create')}}"<li class="list-group-item list-group-item-success">Nouveau projet</li>
            </ul>

        </div>
    </div>
</div>
@endsection

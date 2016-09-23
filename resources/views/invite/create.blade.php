@extends('layouts.app')

@section('content')

    {{--Display des erreurs--}}
    @include('partials.event.errors')
    {{-- Ajout de post par le partial form--}}
    @include('partials.event.form', ['action' => 'create'])


@endsection

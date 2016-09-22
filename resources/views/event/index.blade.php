@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Vos projets</h1>
            <ul class="list-group">
				 @foreach ($events as $event)
                	<li class="list-group-item">
							<a href="{{url('event/'.$event->id)}}">{{ $event->name }}</a>
					</li>
				@endforeach
                <br>
                <a href="{{route('event.create')}}"><li class="list-group-item list-group-item-success">Nouveau projet</li></a>
            </ul>

        </div>
    </div>
</div>
@endsection

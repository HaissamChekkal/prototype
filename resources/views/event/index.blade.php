@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


            <table  class="tablesorter table table-responsive">
                <thead>
                <tr style="font-weight:bold;">
                    <th>Type</th>
                    <th>Titre</th>
                    <th>Organisateur</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                        @foreach ($events as $event)

                            @if(Auth::user()->admin == 1)
                                <tr>

                                    <td>
                                        @if($event->type == 'mariage')
                                            <img height="100" src="{{asset('img/event1.jpg')}}" alt="mariage">
                                        @else
                                            <img height="100" src="{{asset('img/event2.jpg')}}" alt="pro">
                                        @endif
                                    </td>
                                    <td><a href="{{url('event/'.$event->id)}}">{{ $event->name }}</a></td>
                                    <td>
                                        @foreach($users as $user)
                                            @if($event->user_id == $user->id)
                                                {{$user->name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if( $event->date < $event->dt )
                                            Passé
                                        @else
                                            {{$event->date}}
                                        @endif
                                    </td>
                                </tr>
                            @elseif($event->user_id == $user_id)

                                <tr>
                                    <td>
                                        @if($event->type == 'mariage')
                                            <img height="100" src="{{asset('img/event1.jpg')}}" alt="mariage">
                                        @else
                                            <img height="100" src="{{asset('img/event2.jpg')}}" alt="pro">
                                        @endif
                                    </td>
                                    <td><a href="{{url('event/'.$event->id)}}">{{ $event->name }}</a></td>
                                    <td>
                                        @foreach($users as $user)
                                            @if($event->user_id == $user->id)
                                                {{$user->name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if( $event->date < $dt )
                                            Passé
                                        @else
                                            {{$event->date}}
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                </tbody>
            </table>

{{--
            <ul class="list-group">
				 @foreach ($events as $event)
                    @if(Auth::user()->admin == 1)
                        <li class="list-group-item">
                            <a href="{{url('event/'.$event->id)}}">{{ $event->name }}</a>
                        </li>
                    @elseif($event->user_id == $user_id)
                        <li class="list-group-item">
                                <a href="{{url('event/'.$event->id)}}">{{ $event->name }}</a>
                        </li>
                    @endif
				@endforeach
				--}}
                <br>
                <a href="{{route('event.create')}}"><li class="list-group-item list-group-item-success">Nouveau projet</li></a>
            </ul>

        </div>
    </div>
</div>
@endsection

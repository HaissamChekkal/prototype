<div class="container">


    @if($action == 'edit')
        <h1>Modifier les informations d'un event</h1>

        {!! Form::model($events, ['route' => ['event.update', $events->id], 'method' => 'PUT', 'files' => 'true']) !!}
    @else
        <h1>Ajouter un nouveau event</h1>
        {!! Form::open(['route' => 'event.store', 'method' => 'POST']) !!}
    @endif

    <div class="form-group">
        {!! Form::label('Nom de l event') !!}
        {!! Form::text('name', null, [
            'class' => 'form-control',
            'placeholder' => 'nom de l event'
        ]) !!}
    </div>


    <div class="form-group">
        {!! Form::label('Nombre de personnes') !!}
        {!! Form::number('nbPerson', null, [
            'class' => 'form-control',
            'placeholder' => 'Nombre de personnes'
        ]) !!}
    </div>
	
    <div class="form-group">
        {!! Form::label('Nombre de tables') !!}
        {!! Form::number('nbTable', null, [
            'class' => 'form-control',
            'placeholder' => 'Nombre de tables'
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Date de l évenement') !!}
        {!! Form::date('date', null) !!}
    </div>

        <div class="form-group">
        Mariage
        {!! Form::radio('type', 0, true) !!}
        Meeting
        {!! Form::radio('type', 1) !!}
	</div>


    {!! Form::submit('Enregistrer', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
</div>
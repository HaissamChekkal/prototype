<div class="container">

    <a href="{{route('event.index')}}">Retour à la liste</a>


@if($action == 'edit')
        <h1>Modifier les informations d'un invite</h1>

        {!! Form::model($invites, ['route' => ['invite.update', $invites->id], 'method' => 'PUT', 'files' => 'true']) !!}
    @else
        <h1>Ajouter un nouveau invite</h1>
        {!! Form::open(['route' => 'invite.store', 'method' => 'POST']) !!}
    @endif

    <div class="form-group">
        {!! Form::label('Nom de l\'invite') !!}
        {!! Form::text('name', null, [
            'class' => 'form-control',
            'placeholder' => 'nom de l invite'
        ]) !!}
    </div>

    <div class="form-group">
        Homme
        {!! Form::radio('sexe', '0', true) !!}
        Femme
        {!! Form::radio('sexe', '1') !!}
    </div>

    <div class="form-group">
        {!! Form::label('Age') !!}
        {!! Form::number('age', null, [
            'class' => 'form-control',
            'placeholder' => ''
        ]) !!}
    </div>
	
    <div class="form-group">
        {!! Form::label('Numéro de téléphone') !!}
        {!! Form::number('numero', null, [
            'class' => 'form-control',
            'placeholder' => ''
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Notes') !!}
        {!! Form::number('note', null, [
            'class' => 'form-control',
            'placeholder' => ''
        ]) !!}
    </div>

        {!! Form::submit('Enregistrer', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
</div>
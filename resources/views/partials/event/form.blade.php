<div class="container">


    @if($action == 'edit')
        <h1>Modifier les informations d'un event</h1>

        {!! Form::model($events, ['route' => ['event.update', $events->id], 'method' => 'PUT', 'files' => 'true']) !!}
    @else
        <h1>Ajouter un nouveau event</h1>
        {!! Form::open(['route' => 'event.store', 'method' => 'POST']) !!}
    @endif

    <div class="form-group">
        {!! Form::label('Prénom NOM') !!}
        {!! Form::text('name', null, [
            'class' => 'form-control',
            'placeholder' => 'Ex: Pierre DUPONT'
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('A été contacté par ...') !!}
        {!! Form::text('contact', null, [
            'class' => 'form-control',
            'placeholder' => 'Ex: Mail'
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Numéro de téléphone') !!}
        {!! Form::number('number', null, [
            'class' => 'form-control',
            'placeholder' => 'Ex: 0610101010'
        ]) !!}
    </div>

        <hr><p class="alert alert-info">Section Login</p>
    <div class="form-group">
        {!! Form::label('Email') !!}
        {!! Form::text('email', null, [
            'class' => 'form-control',
            'placeholder' => 'Ex: contact@meolia.fr'
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Mot de passe, numéro de telephone par défaut') !!}
        {!! Form::password('password', [
            'class' => 'form-control',
            'style' => 'width:30%',
            'placeholder' => 'Laisser vide pour num de telephone du client 06'
        ]) !!}
    </div>
    <hr/>


    <div class="form-group">

        <label>Secteur, ville souhaité. </label>
        <p class="alert alert-danger">De préférence <b>uniquement</b> le code postal.</p>
        {{--TEST DE FORMULAIRE DE SECTEUR AVEC AUTOCOMPLEXION--}}

        <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('js/jquery-ui.js') }}"></script>

        {{--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&amp;sensor=false"></script>--}}

        <script>
            $(function() {

                $( "#tags" ).autocomplete({
                    source: availableTags
                });
            });
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>

        <script>
            function initialize() {
                var input = document.getElementById('sec1' );
                var options = {
                    types: ['geocode'],
                    componentRestrictions: {country: 'fr'}
                };

                autocomplete = new google.maps.places.Autocomplete(input, options);

            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <div>
            <label>Secteur 1</label>
            {!! Form::text('secteur1', null, [
            'class' => 'secteur form-control',
            'id' => 'sec1',
            'name' => 'secteur1',
            'size' => '50',
            'placeholder' => 'Ville souhaité '
            ]) !!}
            {{--<input class="secteur" id="sec1" name="secteur1" type="text" size="50">--}}
        </div>
        <script>
            function initialize() {
                var input = document.getElementById('sec2' );
                var options = {
                    types: ['geocode'],
                    componentRestrictions: {country: 'fr'}
                };

                autocomplete = new google.maps.places.Autocomplete(input, options);

            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <div>
            <label>Secteur 2</label>
            {!! Form::text('secteur2', null, [
            'class' => 'secteur form-control',
            'id' => 'sec2',
            'name' => 'secteur2',
            'size' => '50',
            'placeholder' => 'Ville souhaité '
            ]) !!}
            {{--<input class="secteur" id="sec2"name="secteur2" type="text" size="50">--}}
        </div>
        <script>
            function initialize() {
                var input = document.getElementById('sec3' );
                var options = {
                    types: ['geocode'],
                    componentRestrictions: {country: 'fr'}
                };

                autocomplete = new google.maps.places.Autocomplete(input, options);

            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <div>
            <label>Secteur 3</label>
            {!! Form::text('secteur3', null, [
            'class' => 'secteur form-control',
            'id' => 'sec3',
            'name' => 'secteur3',
            'size' => '50',
            'placeholder' => 'Ville souhaité '
            ]) !!}
            {{--<input class="secteur" id="sec3" name="secteur3" type="text" size="50">--}}
        </div>
        <script>
            function initialize() {
                var input = document.getElementById('sec4' );
                var options = {
                    types: ['geocode'],
                    componentRestrictions: {country: 'fr'}
                };

                autocomplete = new google.maps.places.Autocomplete(input, options);

            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <div>
            <label>Secteur 4</label>
            {!! Form::text('secteur4', null, [
            'class' => 'secteur form-control',
            'id' => 'sec4',
            'name' => 'secteur4',
            'size' => '50',
            'placeholder' => 'Ville souhaité '
            ]) !!}
            {{--<input class="secteur" id="sec4" name="secteur4" type="text" size="50">--}}
        </div>
        <script>
            function initialize() {
                var input = document.getElementById('sec5' );
                var options = {
                    types: ['geocode'],
                    componentRestrictions: {country: 'fr'}
                };

                autocomplete = new google.maps.places.Autocomplete(input, options);

            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <div>
            <label>Secteur 5</label>
            {!! Form::text('secteur5', null, [
            'class' => 'secteur form-control',
            'id' => 'sec5',
            'name' => 'secteur5',
            'size' => '50',
            'placeholder' => 'Ville souhaité '
            ]) !!}
            {{--<input class="secteur" id="sec5" name="secteur5" type="text" size="50">--}}
        </div>


        <br/>{{--
        {!! Form::text('secteur2', null, [
            'class' => 'form-control',
            'placeholder' => '2ème secteur souhaité'
        ]) !!}
        <br/>
        {!! Form::text('secteur3', null, [
            'class' => 'form-control',
            'placeholder' => '3ème secteur '
        ]) !!}
        <br/>
        {!! Form::text('secteur4', null, [
            'class' => 'form-control',
            'placeholder' => '4ème secteur '
        ]) !!}
        <br/>
        {!! Form::text('secteur5', null, [
            'class' => 'form-control',
            'placeholder' => '5ème secteur '
        ]) !!}
        <br/>--}}
    </div>

    <div class="form-group">
        {!! Form::label('Budget en €') !!}
        {!! Form::number('budget', null, [
            'class' => 'form-control',
            'placeholder' => 'Budget du event'
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('A-t-il un terrain ?') !!}
        Non
        {!! Form::radio('terrain', 0, true) !!}
        Oui
        {!! Form::radio('terrain', 1) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Offre faite ?') !!}
        Non
        {!! Form::radio('offrevalide', 0, true) !!}
        Oui
        {!! Form::radio('offrevalide', 1) !!}
    </div>


    <div class="form-group">
        {!! Form::label('Remarques (notes)') !!}
       {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Enregistrer', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
</div>
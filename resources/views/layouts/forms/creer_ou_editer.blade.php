<div class="form-group">

    {!! Form::label('titre', 'Titre') !!}
    <div class="form-controls">

        {!! Form::text('titre', null, ['class' => 'form-control']) !!}

    </div>

    {!! Form::label('auteur', 'Auteur') !!}
    <div class="form-controls">

        {!! Form::text('auteur', null, ['class' => 'form-control']) !!}

    </div>

    {!! Form::label('texte', 'Texte de l\'article') !!}
    <div class="form-controls">

        {!! Form::textarea('texte', null, ['class' => 'form-control']) !!}

    </div>

    {!! Form::label('categorie_id', 'Catégorie de l\'article') !!}
    <div class="form-controls">

        {!! Form::select('categorie_id', $categories, null,  ['class' => 'form-control']) !!}

    </div>


</div>

{!! Form::submit('Publier', ['class' => 'btn btn-primary']) !!}
@extends('layouts.template')
@section('contenu')
<div class="container">
<h2>
    Modification
</h2>

<form action="{{ route('livre.update',$livre->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-groupe">
        <label for="titre">Titre</label>
        <input class="form-control" type="text" name="titre" id="titre" value="{{ $livre->titre }}" required>
    </div>
    <div class="form-groupe">
        <label for="auteur">Auteur</label>
        <input class="form-control" type="text" name="auteur" id="auteur" value="{{ $livre->auteur }}" required>
    </div>
    <div class="form-groupe">
        <label for="num_livre">Numero livre</label>
        <input class="form-control" type="text" name="num_livre" id="num_livre" value="{{ $livre->num_livre}}" required>

    </div>
    <div class="form-groupe">
        <label for="quantite">Quantite</label>
        <input class="form-control" type="quantite" name="quantite" id="quantite" value="{{ $livre->quantite }}" required>
    </div>
    <button type="submit" class="btn btn-success">Modifier</button>
    <a href="{{ route('Listelivre') }}" class="btn btn-danger">Annuler</a>
</form>
</div>
@endsection

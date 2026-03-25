@extends('layouts.template')
@section('contenu')
<div class="container">
<h2>
    Formulaire de creation
</h2>

<form action="{{ route('livre.store') }}" method="POST">
    @csrf
    <div class="form-groupe">
        <label for="titre">Titre</label>
        <input class="form-control" type="text" name="titre" id="titre" value="{{ old('titre') }}" required>
    </div>
    <div class="form-groupe">
        <label for="auteur">Auteur</label>
        <input class="form-control" type="text" name="auteur" id="auteur" value="{{ old('auteur') }}" required>
    </div>
    <div class="form-groupe">
        <label for="num_livre">Numero livre</label>
        <input class="form-control" type="text" name="num_livre" id="num_livre" value="{{ old('num_livre') }}" required>
        @error('num_livre')
            <div class="alert alert-danger">ce numero existe deja</div>
        @enderror
    </div>
    <div class="form-groupe">
        <label for="quantite">Quantite</label>
        <input class="form-control" type="quantite" name="quantite" id="quantite" value="{{ old('quantite') }}" required>
    </div>
    <button type="submit" class="btn btn-success">+ Ajouter</button>
    <a href="{{ route('Listelivre') }}" class="btn btn-danger">Annuler</a>
</form>
</div>
@endsection

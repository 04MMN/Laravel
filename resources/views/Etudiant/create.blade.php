@extends('layouts.template')
@section('contenu')
<div class="container">
<h2>
    Formulaire de creation
</h2>

<form action="{{ route('etudiant.store') }}" method="POST">
    @csrf
    <div class="form-groupe">
        <label for="nom">Nom</label>
        <input class="form-control" type="text" name="nom" id="nom" value="{{ old('nom') }}" required>
    </div>
    <div class="form-groupe">
        <label for="prenom">Prenom</label>
        <input class="form-control" type="text" name="prenom" id="prenom" value="{{ old('prenom') }}" required>
    </div>
    <div class="form-groupe">
        <label for="age">Age</label>
        <input class="form-control" type="text" name="age" id="age" value="{{ old('age') }}" required>
        @error('age')
            <div class="alert alert-danger">ce age deja</div>
        @enderror
    </div>
    <div class="form-groupe">
        <label for="adress">Adress</label>
        <input class="form-control" type="adress" name="adress" id="adress" value="{{ old('adress') }}" required>
    </div>
    <button type="submit" class="btn btn-success">+ Ajouter</button>
    <a href="{{ route('ListeEtudiant') }}" class="btn btn-danger">Annuler</a>
</form>
</div>
@endsection

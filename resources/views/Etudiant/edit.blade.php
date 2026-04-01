@extends('layouts.template')
@section('contenu')
<div class="container">
<h2>
    Modification
</h2>

<form action="{{ route('etudiant.update',$etudiant->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-groupe">
        <label for="nom">Nom</label>
        <input class="form-control" type="text" name="nom" id="nom" value="{{ $etudiant->nom }}" required>
    </div>
    <div class="form-groupe">
        <label for="prenom">prenom</label>
        <input class="form-control" type="text" name="prenom" id="prenom" value="{{ $etudiant->prenom }}" required>
    </div>
    <div class="form-groupe">
        <label for="age">Age</label>
        <input class="form-control" type="text" name="age" id="age" value="{{ $etudiant->age}}" required>

    </div>
    <div class="form-groupe">
        <label for="adress">adress</label>
        <input class="form-control" type="adress" name="adress" id="adress" value="{{ $etudiant->adress }}" required>
    </div>
    <button type="submit" class="btn btn-success">Modifier</button>
    <a href="{{ route('ListeEtudiant') }}" class="btn btn-danger">Annuler</a>
</form>
</div>
@endsection

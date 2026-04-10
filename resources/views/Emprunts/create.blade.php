@extends('layouts.template')
@section('contenu')
<h2>
    Creation d'emprunt
</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('emprunts.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="livre_id">livre</label>
        <select name="livre_id" id="livre_id">
            @foreach ($livres as $item )
                <option value="{{ $item->id }}">{{ $item->titre }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="Etudiant_id">Etudiant</label>

        <select name="Etudiant_id" id="Etudiant_id">
            @foreach ($etudiants as $item)
                <option value="{{ $item->id }}">{{$item->prenom}} {{$item->nom}}</option>

            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="date_emprunt">Date Emprunt</label>
        <input type="date" id="date_emprunt" name="date_emprunt" title="date emprunt">
    </div>
    <div class="form-group">
         <label for="date_retour">Date Retour</label>
        <input type="date" id="date_retour" name="date_retour" title="date retour">
    </div>
    <button type="submit">
        Enrigistrer
    </button>
    <a href="{{ route('emprunts.index') }}">Retour</a>
</form>
@endsection

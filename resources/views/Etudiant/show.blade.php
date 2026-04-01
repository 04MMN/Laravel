@extends('layouts.template')
@section('contenu')


<div class="card-body">
<h2>
    les details de l'enrigistrement
</h2>
<p>Nom : {{$Etudiant->nom}}</p>
<p>Prenom : {{$Etudiant->prenom}}</p>
<p> Age : {{$Etudiant->age}}</p>
<p>Adress : {{$Etudiant->adress}}</p>
<a href="{{ route('ListeEtudiant') }}">Retour</a>
</div>

@endsection

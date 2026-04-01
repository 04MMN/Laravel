@extends('layouts.template')
@section('contenu')


<div class="card-body">
<h2>
    les details de l'enrigistrement
</h2>
<p>Titre : {{$livre->titre}}</p>
<p>Auteur : {{$livre->auteur}}</p>
<p>Numero livre : {{$livre->num_livre}}</p>
<p>Quantite : {{$livre->quantite}}</p>
<a href="{{ route('Listelivre') }}">Retour</a>
</div>

@endsection

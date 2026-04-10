@extends('layouts.template')
@section('contenu')
{{$emprunt->etudiant->prenom}}  {{$emprunt->etudiant->nom}}
<p>Livre {{$emprunt->livre->titre}}</p>
<p>Etudiant </p>
<p>Date Emprunt {{$emprunt->date_emprunt}}</p>
<p>Date Retour  {{$emprunt->date_retour}}</p>
<p>Rendu
@if ($emprunt->rendu)

<span class="badge bg-sucess">OUI</span>
@else
<span class="badge bg-warning">Non</span>
@endif
</p>
<form action="{{ route('retourlivre',$emprunt->id) }}" method="POST">
    @csrf
    @method('PUT')

    <button class="btn btn-primary">Retour Livre</button>

</form>
<a href="{{ route('emprunts.index') }}" class="btn btn-danger">Liste </a>
@endsection

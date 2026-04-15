@extends('layouts.template')
@section('contenu')

<div class="container">
<p>
    Nous sommes dans la page DASHBOARD
</p>

<h2>Etudiant</h2>
<h3>{{$total_etudiant}}</h3>
<h2>Livre</h2>
<h3>{{$total_livre}}</h3>
<h2>Emprunt</h2>
<h3>{{$total_emprunt}}</h3>
<h2>Livre Non rendus</h2>
<h3>{{$total_nonrendus}}</h3>


</div>
@endsection

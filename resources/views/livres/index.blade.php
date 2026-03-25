@extends('layouts.template')
@section('contenu')
<p>
   <table class="table table-striped table-advance table-hover">
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>



    @endif
                <h4><i class="fa fa-angle-right"></i>Liste des Livres</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>Titre</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i>Auteur</th>
                    <th><i class="fa fa-bookmark"></i> Numero Livre</th>
                    <th><i class=" fa fa-edit"></i>Quantite</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tab_livre as $livre)


                  <tr>
                    <td>
                      <a href="basic_table.html#">{{$livre->titre}}</a>
                    </td>
                    <td class="hidden-phone">{{$livre->auteur}}</td>
                    <td>{{$livre->num_livre }} </td>
                    <td><span class="label label-info label-mini">{{$livre->quantite}}</span></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                     @endforeach


                </tbody>

              </table>{{ $tab_livre->links() }}
</p>
@endsection

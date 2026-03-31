<@extends('layouts.template')
@section('contenu')
<p>
   <table class="table table-striped table-advance table-hover">
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>



    @endif
                <h4><i class="fa fa-angle-right"></i>Liste des etudiants</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>Nom</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i>Prenom</th>
                    <th><i class="fa fa-bookmark"></i>Age</th>
                    <th><i class=" fa fa-edit"></i>Adress</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tab_etudiant as $Etudiant)


                  <tr>
                    <td>
                      <a href="basic_table.html#">{{$Etudiant->nom}}</a>
                    </td>
                    <td class="hidden-phone">{{$Etudiant->prenom}}</td>
                    <td>{{$Etudiant->age }} </td>
                    <td><span class="label label-info label-mini">{{$Etudiant->adress}}</span></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>

                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                     @endforeach


                </tbody>

              </table>{{ $tab_etudiant->links() }}
</p>
@endsection


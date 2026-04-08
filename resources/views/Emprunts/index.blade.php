@extends('layouts.template')
@section('contenu')
<p>
   <table class="table table-striped table-advance table-hover">
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>



    @endif
                <h4><i class="fa fa-angle-right"></i>Liste des emprunts</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>livre </th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i>etudiant</th>
                    <th><i class="fa fa-bookmark"></i> date emprunt</th>
                    <th><i class=" fa fa-edit"></i>date retour</th>
                    <th><i class=" fa fa-edit"></i>rendu</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($emprunt as $item)


                  <tr>
                    <td>
                       {{$item->livre->titre}}
                    </td>
                    <td class="hidden-phone">{{$item->Etudiant_id}}</td>
                    <td>{{$item->date_emprunt }} </td>
                    <td><span class="label label-info label-mini">{{$item->date_retour}}</span></td>
                    <td>
                      @if (!$item->rendu)
                        non
                        @else
                        oui
                      @endif
                    </td>
                  </tr>
                     @endforeach


                </tbody>

              </table>
</p>
@endsection

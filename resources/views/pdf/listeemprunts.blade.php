<h2>liste des emprunts</h2>
<table>
    <head>
        <th>
            <th>
                Etudiant
            </th>
            <th>
                Livre
            </th>
            <th>
                Date Emprunt
            </th>
        </th>
    </head>
    <body>
        @foreach ($emprunts as $item )
            <tr>
                <td>{{$item->etudiant->prenom}} {{$item->etudiant->nom}}</td>
                <td>{{$item->livre->titre}}</td>
                <td>{{$item->date_emprunt}}</td>
            </tr>
        @endforeach
    </body>
</table>

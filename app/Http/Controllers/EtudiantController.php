<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tab_etudiant= Etudiant::paginate(5);
        return view('Etudiant.index',compact('tab_etudiant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Etudiant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validform = $request -> validate([
            'nom'=>'required |string |max:255',
            'prenom'=>'required|string|max:200',
            'age'=>'required|numeric|max:255|unique:etudiants,age',
            'adress'=>'required|string|min:0'
        ] , ['age.unique'=>'veuiller changer de numero car cela existe !']);
        Etudiant :: create($validform);
        return  redirect()->route('ListeEtudiant')->with('success','Livre ajoute avec succes!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $Etudiant)
    {
        return view('Etudiant.show',compact('Etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $Etudiant = Etudiant::find($id);
        return view('Etudiant.edit',compact('Etudiant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $Etudiant)
    {
        //
         $reqvalid= $request->validate([
            'nom'=>'required |string |max:255',
            'prenom'=>'required|string|max:200',
            'age'=>'required|numeric|min:0'
        ]);

        $Etudiant->update($reqvalid);
        return  redirect()->route('ListeEtudiant');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $Etudiant)
    {
        $Etudiant->delete();
        return redirect()->route('ListeEtudiant');
    }
}

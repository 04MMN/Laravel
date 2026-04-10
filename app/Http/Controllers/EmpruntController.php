<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use App\Models\Livre;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //dd($tab_emprunt);
      $emprunt=Emprunt::with(['livre','etudiant'])->get();
         //dd($emprunt);
        // $emprunt=Emprunt::all();
        return view('Emprunts.index',compact('emprunt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $livres=Livre::all();
        $etudiants=Etudiant::all();

        return view('Emprunts.create',compact('livres','etudiants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
       $validform = $request->validate([
    'livre_id'    => 'required|numeric',
    'Etudiant_id'=>'required',
    'date_retour'    => 'required|date|after_or_equal:date_emprunt',
    'date_emprunt' => 'required|date'
]);

// Récupérer le livre concerné
$livre = Livre::findOrFail($request->livre_id);

// Vérifier si la quantité est suffisante
if ($livre->quantite <= 0) {
    return redirect()->back()->with('error', 'Stock épuisé, emprunt impossible !');
}

// Diminuer la quantité
$livre->quantite -= 1;
$livre->save();

Emprunt::create($validform);

return redirect()->route('emprunts.index')->with('success', 'Emprunt ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Emprunt $emprunt)
    {
        //
        return view('Emprunts.show',compact('emprunt'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Emprunt $emprunt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Emprunt $emprunt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Emprunt $emprunt)
    {
        //
    }

    public function retourlivre(Emprunt $emprunt){
       // dd($emprunt);
        $livre=Livre::find($emprunt->livre_id);
        $livre->increment('quantite');
        $emprunt->update(['rendu'=>true]);
        return redirect()->route('emprunts.show',$emprunt->id)->with('livre rendu');
    }
}

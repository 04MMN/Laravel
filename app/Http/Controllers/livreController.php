<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class livreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //$tab_livre=livre::all();
         //dd($livre);
         $tab_livre = livre::paginate(1);
         return view('livres.index',compact('tab_livre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('livres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validform = $request -> validate([
            'auteur'=>'required |string |max:255',
            'titre'=>'required|string|max:200',
            'num_livre'=>'required|string|max:255|unique:livres,num_livre',
            'quantite'=>'required|numeric|min:0'
        ] , ['num_livre.unique'=>'veuiller changer de numero car cela existe !']);
        livre :: create($validform);
        return  redirect()->route('Listelivre')->with('success','Livre ajoute avec succes!!');
        //dd($validform);
    }

    /**
     * Display the specified resource.
     */
    public function show(livre $livre)
    {
        // $livre =livre::find($id);
        return view('livres.show',compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $livre = livre::find($id);
        return view('livres.edit',compact('livre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livre $livre)
    {
        $reqvalid= $request->validate([
            'auteur'=>'required |string |max:255',
            'titre'=>'required|string|max:200',
            'quantite'=>'required|numeric|min:0'
        ]);

        $livre->update($reqvalid);
        return  redirect()->route('Listelivre');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(livre $livre)
    {

        $livre->delete();
        return redirect()->route('Listelivre');
    }
}

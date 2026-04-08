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
        $livre=Livre::find($request->livre_id);
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Emprunt $emprunt)
    {
        //
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
}

<?php

namespace App\Http\Controllers;
use App\Models\Livre;
use App\Models\Etudiant;
use App\Models\Emprunt;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

    $total_livre=Livre::count();
    $total_etudiant=Etudiant::count();
    $total_emprunt=Emprunt::count();
    $total_nonrendus=Emprunt::where('rendu',false)->count();
        return view('dashboard',compact('total_livre','total_etudiant','total_emprunt','total_nonrendus'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('log.login');
    }

    public function gererlogin(Request $request){
        //dd(Hash::make('passer123'));
        if(Auth::attempt(['email' => $request->mail, 'password' => $request->password])){
            //dd('connexion reussi');
            return redirect('dashboard');
        }else{
            //dd('erreur');
            return back()->withErrors('erreur_auth','Email ou password incorect');
        }
    }
}

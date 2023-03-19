<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{

    public function user(){
        return view('utilisateur/index');
    }

    public function suivi(){
        return view('utilisateur/suivi');
    }

    public function demande(){
        return view('utilisateur/suivi');
    }


    public function store(Request $request){

        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "email"=>"required",
            "adresse"=>"required",
            "datenaiss"=>"required",
            "origine"=>"required",
            "password"=>"required",
        ]);

        Personne::create($request->all());

        return back()->with("success","Incrisption reussi veuillez attendre la validation de l'administrateur");
    }

    // login
    public function connect(Request $request){

        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "email"=>"required",
            "adresse"=>"required",
            "datenaiss"=>"required",
            "origine"=>"required",
            "password"=>"required",
        ]);

        Personne::create($request->all());

        return back()->with("success","Incrisption reussi veuillez attendre la validation de l'administrateur");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngenieurController extends Controller
{
    public function ingenieur(){
        return view('ingenieur/index');
    }

    public function equipes(){
        return view('ingenieur/equipes');
    }

    public function consultertaches(){
        return view('ingenieur/mestaches');
    }

}

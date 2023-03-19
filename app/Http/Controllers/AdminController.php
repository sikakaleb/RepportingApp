<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.index');
    }

    public function inscription(){
        return view('admin/inscription');
    }

    public function consultersignalement(){
        return view('admin/consultersignalement');
    }


}

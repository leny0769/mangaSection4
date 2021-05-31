<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dessinateurs;

class DessinateursController extends Controller
{
    public function index(){
        $dessinateur = new Dessinateurs();
        $dessinateurs = $dessinateur->getAll();
        return view('dessinateurs',compact('dessinateurs'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga2;

class Manga2Controller extends Controller
{
    public function index(){
        $manga = new Manga2();
        $mangas = $manga->getAll();
        return view('index2',compact('mangas'));
    }
}
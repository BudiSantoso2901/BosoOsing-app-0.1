<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahasa;

class BahasaController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // MENCARI ARTI / TRANSLATE
    public function translate($kata)
    {
        $editDataKata=Bahasa::find($kata);
        
    }

    // MENAMPILKAN KATA
    public function tampilKata()
    {
        
    }


}

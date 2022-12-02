<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    //
    public function kuliner()
    {
        $allKuliner = Kuliner::all();
        $data['allKuliner'] = Kuliner::all();

        return view('kuliner.kuliner', $data);
    }
    public function more($id_kuliner)
    {
        $allKuliner = kuliner::where('id', $id_kuliner)->get();

        return view('kuliner.more-kuliner', compact('allKuliner'));
    }

    //for admin
   
}

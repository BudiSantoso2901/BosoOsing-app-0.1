<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\wisata;

class WisataController extends Controller
{
    //
    public function wisata()
    {
        $allWisata = wisata::all();
        $data['allWisata'] = wisata::all();

        return view('wisata.wisata', $data);
    }

    public function more($id_wisata)
    {
        $allWisata = wisata::where('id', $id_wisata)->get();

        return view('wisata.more-wisata', compact('allWisata'));
    }
}

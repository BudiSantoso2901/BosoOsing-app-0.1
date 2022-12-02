<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;

class wisatasController extends Controller
{
    //
    public function wisatasview()
    {
        $allwisata = wisata::all();
        $data['allwisata'] = wisata::all();

        return view('backend.wisata.view', $data);
    }
    public function wisatasAdd(){
        return view('backend.wisata.add');
    }

    public function wisatasStore(Request $request){
        $data = new wisata();
        $data -> nama_wisata=$request->nama_wisata;
        $data -> lokasi=$request->lokasi;
        $data -> outline=$request->outline;
        $data -> gambar=$request->gambar;
        $data -> artikel=$request->artikel;
        $data -> save();

        return redirect()->route('backend.wisata.view')->with('message','Data Berhasil Ditambahkan');
    }
    public function wisatasEdit($id){
        $editData = wisata::find($id);
         return view('backend.wisata.edit', compact('editData'));
     }
 
 
     public function wisatasUpdate(Request $request, $id){
         $data = wisata::find($id);
         $data -> nama_wisata=$request->nama_wisata;
         $data -> lokasi=$request->lokasi;
         $data -> outline=$request->outline;
         $data -> gambar=$request->gambar;
         $data -> artikel=$request->artikel;
 
         $data -> save();
 
         return redirect()->route('backend.wisata.view')->with('message','Data Berhasil Dirubah');
     }
     public function wisatasDelete($id){
        $deleteData = wisata::find($id);
        $deleteData -> delete();
        
        return redirect()->route('backend.wisata.view')->with('message','Data Berhasil Dihapus');
    }
}

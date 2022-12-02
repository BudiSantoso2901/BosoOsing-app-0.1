<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinersController extends Controller
{
    //
    public function kulinersView()
    {
        $allKuliner = kuliner::all();
        $data['allKuliner'] = kuliner::all();

        return view('backend.kuliner.view', $data);
    }
    public function kulinersAdd(){
        return view('backend.kuliner.add');
    }

    public function kulinersStore(Request $request){
        $data = new kuliner();
        $data -> nama_kuliner=$request->nama_kuliner;
        $data -> lokasi=$request->lokasi;
        $data -> outline=$request->outline;
        $data -> gambar=$request->gambar;
        $data -> artikel=$request->artikel;
        $data -> save();

        return redirect()->route('backend.kuliner.view')->with('message','Data Berhasil Ditambahkan');
    }
    public function kulinersEdit($id){
        $editData = kuliner::find($id);
         return view('backend.kuliner.edit', compact('editData'));
     }
 
 
     public function kulinersUpdate(Request $request, $id){
         $data = kuliner::find($id);
         $data -> nama_kuliner=$request->nama_kuliner;
         $data -> lokasi=$request->lokasi;
         $data -> outline=$request->outline;
         $data -> gambar=$request->gambar;
         $data -> artikel=$request->artikel;
 
         $data -> save();
 
         return redirect()->route('backend.kuliner.view')->with('message','Data Berhasil Dirubah');
     }
     public function kulinersDelete($id){
        $deleteData = kuliner::find($id);
        $deleteData -> delete();
        
        return redirect()->route('backend.kuliner.view')->with('message','Data Berhasil Dihapus');
    }
}

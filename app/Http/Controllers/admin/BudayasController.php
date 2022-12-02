<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Budaya;
use Illuminate\Http\Request;

class budayasController extends Controller
{
    //
    public function budayasview()
    {
        $allbudaya = budaya::all();
        $data['allbudaya'] = budaya::all();

        return view('backend.budaya.view', $data);
    }
    public function budayasAdd(){
        return view('backend.budaya.add');
    }

    public function budayasStore(Request $request){
        $data = new budaya();
        $data -> nama_budaya=$request->nama_budaya;
        $data -> lokasi=$request->lokasi;
        $data -> outline=$request->outline;
        $data -> gambar=$request->gambar;
        $data -> artikel=$request->artikel;
        $data -> save();

        return redirect()->route('backend.budaya.view')->with('message','Data Berhasil Ditambahkan');
    }
    public function budayasEdit($id){
        $editData = budaya::find($id);
         return view('backend.budaya.edit', compact('editData'));
     }
 
 
     public function budayasUpdate(Request $request, $id){
         $data = budaya::find($id);
         $data -> nama_budaya=$request->nama_budaya;
         $data -> lokasi=$request->lokasi;
         $data -> outline=$request->outline;
         $data -> gambar=$request->gambar;
         $data -> artikel=$request->artikel;
 
         $data -> save();
 
         return redirect()->route('backend.budaya.view')->with('message','Data Berhasil Dirubah');
     }
     public function budayasDelete($id){
        $deleteData = budaya::find($id);
        $deleteData -> delete();
        
        return redirect()->route('backend.budaya.view')->with('message','Data Berhasil Dihapus');
    }
}

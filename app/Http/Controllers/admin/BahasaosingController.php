<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\bahasa__osing;
use Illuminate\Http\Request;

class BahasaosingController extends Controller
{
    //
    public function osingView()
    {
        $allsg = bahasa__osing::all();
        $data['allsg'] = bahasa__osing::all();

        return view('backend.osing.view', $data);
    }
    public function osingAdd(){
        return view('backend.osing.add');
    }

    public function osingStore(Request $request){
        $data = new bahasa__osing();
        $data -> kata=$request->kata;
        $data -> pasangan=$request->pasangan;
        $data -> save();

        return redirect()->route('backend.osing.view')->with('message','Data Berhasil Ditambahkan');
    }
    public function osingEdit($id){
        $editData = bahasa__osing::find($id);
         return view('backend.osing.edit', compact('editData'));
     }
 
 
     public function osingUpdate(Request $request, $id){
         $data = bahasa__osing::find($id);
         $data -> kata=$request->kata;
         $data -> pasangan=$request->pasangan;
       
 
         $data -> save();
 
         return redirect()->route('backend.osing.view')->with('message','Data Berhasil Dirubah');
     }
     public function osingDelete($id){
        $deleteData = bahasa__osing::find($id);
        $deleteData -> delete();
        
        return redirect()->route('backend.osing.view')->with('message','Data Berhasil Dihapus');
    }
}

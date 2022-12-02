<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\bahasa__indonesia;
use Illuminate\Http\Request;

class BahasaindonesiaController extends Controller
{
    //
    public function bahasaView()
    {
        $allind = bahasa__indonesia::all();
        $data['allind'] = bahasa__indonesia::all();

        return view('backend.translate.view', $data);
    }
    public function bahasaAdd(){
        return view('backend.translate.add');
    }

    public function bahasaStore(Request $request){
        $data = new bahasa__indonesia();
        $data -> kata=$request->kata;
        $data -> pasangan=$request->pasangan;
        $data -> save();

        return redirect()->route('backend.translate.view')->with('message','Data Berhasil Ditambahkan');
    }
    public function bahasaEdit($id){
        $editData = bahasa__indonesia::find($id);
         return view('backend.translate.edit', compact('editData'));
     }
 
 
     public function bahasaUpdate(Request $request, $id){
         $data = bahasa__indonesia::find($id);
         $data -> kata=$request->kata;
         $data -> pasangan=$request->pasangan;
       
 
         $data -> save();
 
         return redirect()->route('backend.translate.view')->with('message','Data Berhasil Dirubah');
     }
     public function bahasaDelete($id){
        $deleteData = bahasa__indonesia::find($id);
        $deleteData -> delete();
        
        return redirect()->route('backend.translate.view')->with('message','Data Berhasil Dihapus');
    }
    
}

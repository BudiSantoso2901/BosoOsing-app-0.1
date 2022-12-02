<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Budaya;
use Illuminate\Http\Request;

class BudayaController extends Controller
{
    //
    public function budaya(){
        $allbdy = Budaya::all();
        $data['allbdy'] = Budaya::all();

        return view('budaya.budaya', $data);
    }
    public function more($id_budaya){
        $allbdy = Budaya::where('id', $id_budaya)->get();

        return view('budaya.more-budaya', compact('allbdy'));
    }
}

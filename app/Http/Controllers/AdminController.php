<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AdminController extends Controller
{
    //
    public function logout(){
        FacadesAuth::logout();
        return Redirect()->route('login');
    }
}

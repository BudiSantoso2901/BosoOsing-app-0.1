<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|max:25',
            'email' => 'email | required | unique:users',
            'password' => 'required | confirmed'
        ]);

        // create user
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->save();

        return response()->json($user, 201);
    }

    public function login(Request $request) {
        $validateData = $request->validate([
            'email' => 'email | required',
            'password' => 'required'
        ]);

        // dd($request);

        $login_detail = request(['email','password']);

        if(!Auth::attempt($login_detail)) {
            return response()->json([
                'error' => 'login gagal. Cek lagi detail login'
            ], 401);
        }

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     // dd("berhasil login");

        //     if (Auth::user()->type == 0) { // UNTUK MEMBER
        //         return redirect('member');
        //     } else { // UNTUK ADMIN / 1
        //         return redirect('member/list');
        //     }

        //     return redirect()->intended('member');
        // } else {
        //     return redirect('user/login')->withErrors("Login Gagal");
        // }

        $user = $request->user();

        $tokenResult = $user->createToken('AccessToken');
        $token = $tokenResult->token;
        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_id' => $token->id,
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ], 200);
    }
}


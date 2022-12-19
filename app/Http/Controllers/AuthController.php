<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB; 
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function authenticating(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user()->role_id;
            if($user == 1){
                $request->session()->regenerate();

                Session::flash('status','success');
                Session::flash('message', 'Selamat anda berhasil login sebagai admin!');

                return redirect()->intended('/dashboard');
            }else{
                dd('kontol kontol');
                // Session::flash('status','failed');
                // Session::flash('message', 'Maaf hanya admin yang boleh masuk!');

                // return back();
            }
        }

        Session::flash('status','failed');
        Session::flash('message', 'Login gagal!');

        return back();
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect('/login');
    }
}

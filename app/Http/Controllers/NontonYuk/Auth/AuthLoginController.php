<?php

namespace App\Http\Controllers\NontonYuk\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserCredentials;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('nontonyuk.auth.backend.index', [
            'title' => 'NontonYuk | Login'
        ]);
    }

    public function auth_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $auth = UserCredentials::where('email', $email)->first();

        if($auth){
            if(Hash::check($password, $auth->password)){
                if($auth->isActive == 1){
                    return redirect('/dashboard')->with('success', 'selamat datang kembali');
                }else{
                    return redirect('/login')->with('error', 'akun anda harus di aktivasi dahulu');
                }
            }else{
                return redirect('/login')->with('error', 'kata sandi salah!!');
            }
        }else{
            return redirect('/login')->with('error', 'email dan kata sandi tidak terdaftar');
        }
    }

    public function auth_logout()
    {

    }
}

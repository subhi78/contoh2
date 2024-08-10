<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        // hanya admin yang dapat mengakses halaman ini
        // if (Auth::check() && Auth::user()->is_admin != '1') {
        //     return view('game.index');
        // }

        $this->middleware(function ($request, $next) {
            if ($request->is('login') || $request->is('logout')) {
                return $next($request);
            }
            if (Auth::check() && Auth::user()->is_admin !== '1') {
                return $next($request);
            }
            return view('game.index');
        });
    }
    public function register()
    {

        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/admin')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email or Password salah');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
    public function profile()
    {
        // return view('auth.profile');
        return view('admin.profil.index');
    }
}

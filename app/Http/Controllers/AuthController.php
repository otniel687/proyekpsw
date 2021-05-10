<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;


class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->level == 'admin') {
                return redirect('admin/customer');
            } elseif ($user->level == 'mekanik') {
                return redirect()->intended('mekanik');
            } elseif ($user->level == 'pelanggan') {
                 return redirect()->intended('pelanggan');
            }
        }
        return view('login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

        $kredensil = $request->only('username','password');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect('admin/customer');
                } elseif ($user->level == 'mekanik') {
                    return redirect()->intended('mekanik');
                } elseif ($user->level == 'pelanggan') {
                    return redirect()->intended('pelanggan');
                }
                return redirect()->intended('/');
            }

        return redirect('login')
                                ->withInput()
                                ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function register(){
        return view('registrasi');
    }

    public function simpanregister(Request $request){
        // dd($request->all());
        
        User::create([
            'name' => $request->name, 
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 'pelanggan',
            'remember_token' => Str::random(60),
        ]);
        
         return redirect()->intended('pelanggan');
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }
}

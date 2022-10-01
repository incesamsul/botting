<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Percetakan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postLogin(Request $request)
    {
        $user = User::where('email', $request->email)
            ->first();


        if ($user) {
            if (password_verify($request->password, $user->password)) {
                if ($user->active == '1') {
                    Auth::login($user);
                    return redirect('/dashboard');
                } else {
                    return redirect('/login')->with('fail', 'User belum active');
                }
            } else {
                return redirect('/login')->with('fail', 'Password yang anda masukan salah');
            }
        } else {
            return redirect('/login')->with('fail', 'Username yang anda masukan salah');
        }
        // if (Auth::attempt($request->only('username', 'password'))) {
        //     return redirect('/kasir');
        // }
        // return redirect('/login-biasa')->with('fail', 'Username atau password anda salah');
    }


    public function postRegister(Request $request)
    {
        $attrs = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'konfirmasi_password' => 'required|string',
        ]);

        // $image = $this->saveImage($request->image, 'posts');
        // $generatedId = generateId();

        if ($attrs['password'] != $attrs['konfirmasi_password']) {
            return response([
                'message' => 'password tidak sama',
            ], 401);
        }


        if (User::where('email', $attrs['email'])->first()) {
            return response([
                'message' => 'email sudah terdaftar',
            ], 401);
        }

        $userId = User::create([
            'name' => $attrs['name'],
            'email' => $attrs['email'],
            'password' => bcrypt($attrs['password']),
            'role' => 'pelanggan',
            'active' => '1',
        ])->id;


        return response([
            'message' => 'Akun anda berhasil di buat, silahkan login untuk membuat undangan',
        ], 200);
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

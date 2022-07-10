<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthController extends Controller
{
    public function getRegisterForm()
    {
        return view('auth.register');
    }

    public function getLoginForm()
    {
        return view('auth.login');
    }


    // 註冊
    public function register(\App\Http\Requests\Auth\RegisterRequest $request)
    {
        $inputs= $request->all();
        $user = new User([
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'password' => bcrypt($inputs['password']),
            'role' => User::ROLE_USER,
        ]);

        $user->save();

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $inputs = $request->except('_token');

        if (!Auth::attempt($inputs)) {
            return response('授權失敗', 401);
        }

        $authenticated_user = Auth::user();
        $user = User::find($authenticated_user->id);
        $user->createToken('token')->accessToken;

        session([
            'username' => $user->name,
            'role' => $user->role
        ]);

        switch (Auth::user()->role) {
            case('user'):
                // dump('user');
                 // 假如是一般使用者
                return redirect()->action('ProductController@index');
                break;
            case('admin'):
                // dump('admin');
                // 假如是管理員
                return redirect()->action('Admin\ProductController@index');
                break;
            default:
                return '/login';
        }
    }


    public function logout()
    {
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index(){
        return view('admin.login.index');
    }

    public function login(LoginRequest $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect(route('admin.dashboard'));
        }

        Alert::error('error','User Not Found');
        return redirect()->back();
    }

    public function logout(Request $request){
        Session::flush();
        Auth::logout();
        return redirect(route('admin.loginPage'));
    }
}

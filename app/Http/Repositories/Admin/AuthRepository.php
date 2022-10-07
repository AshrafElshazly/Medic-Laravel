<?php 

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AuthInterface;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthRepository implements AuthInterface
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
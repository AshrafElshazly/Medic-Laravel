<?php 

namespace App\Http\Interfaces\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

interface AuthInterface
{
    public function index();
    public function login(LoginRequest $request);
    public function logout(Request $request);
}
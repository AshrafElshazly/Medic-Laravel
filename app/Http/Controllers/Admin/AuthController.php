<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AuthInterface;


class AuthController extends Controller
{
    public $authInterface;

    public function __construct(AuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    public function index()
    {
        return $this->authInterface->index();
    }

    public function login(LoginRequest $request)
    {
        return $this->authInterface->login($request);
    }

    public function logout(Request $request)
    {
        return $this->authInterface->logout($request);
    }
}

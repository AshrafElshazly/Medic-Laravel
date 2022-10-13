<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\Api\AuthInterface;

class AuthController extends Controller
{
    public $authInterface;
    

    public function __construct(AuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    public function login(Request $request)
    {
        return $this->authInterface->login($request);
    }

    public function register(Request $request)
    {
        return $this->authInterface->register($request);
    }

}

<?php 

namespace App\Http\Interfaces\Api;

use Illuminate\Http\Request;

interface AuthInterface
{
    public function register(Request $request);
    public function login(Request $request);
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function index()
    {
        // dd(Auth::user());
        return view('admin.index');
    }
}
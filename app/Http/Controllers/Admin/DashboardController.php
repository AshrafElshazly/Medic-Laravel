<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function __invoke()
    {
        return view('admin.index');
    }
}
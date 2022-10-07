<?php 

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminHomeInterface;

class AdminHomeRepository implements AdminHomeInterface
{
    function index()
    {
        return view('admin.index');
    }
}
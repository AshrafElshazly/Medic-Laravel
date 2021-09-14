<?php

namespace App\Http\Controllers\web;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $data['settings'] = Setting::first();
        $data['abouts']    = About::first();

        return view('web.about.index',$data);
    }
}

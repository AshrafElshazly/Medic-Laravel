<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\{Setting, About};

class AboutController extends Controller
{
    public function __invoke()
    {
        $data['settings']  = Setting::first();
        $data['abouts']    = About::where('active','=',1)->first();

        return view('web.about.index',$data);
    }
}
<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\{Setting, Shot};

class GalleryController extends Controller
{
    public function __invoke()
    {
        $data['settings'] = Setting::first();
        $data['shots']    = Shot::where('active','=',1)->limit(6)->get();

        return view('web.gallery.index',$data);     
    }
}
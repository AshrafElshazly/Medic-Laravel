<?php

namespace App\Http\Controllers\web;

use App\Models\Shot;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $data['settings'] = Setting::first();
        $data['shots']    = Shot::get();

        return view('web.gallery.index',$data);     
    }
}

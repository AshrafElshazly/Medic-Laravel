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
        $data['settings'] = Setting::where('active','=',1)->find(1);
        $data['shots']    = Shot::where('active','=',1)->limit(6)->get();

        return view('web.gallery.index',$data);     
    }
}

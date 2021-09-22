<?php

namespace App\Http\Controllers\web;

use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        $data['settings'] = Setting::where('active','=',1)->first();
        $data['services'] = Service::where('active','=',1)->get();

        return view('web.services.index',$data);     
    }
}
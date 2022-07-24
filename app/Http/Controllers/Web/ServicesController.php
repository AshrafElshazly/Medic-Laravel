<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\{Setting, Service};
class ServicesController extends Controller
{
    public function __invoke()
    {
        $data['settings'] = Setting::first();
        $data['services'] = Service::where('active','=',1)->get();

        return view('web.services.index',$data);     
    }
}
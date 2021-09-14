<?php

namespace App\Http\Controllers\web;

use App\Models\Doctor;
use App\Models\Feature;
use App\Models\Setting;
use App\Models\FeedBack;
use App\Models\WorkingHour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['settings']      = Setting::first();
        $data['working_hours'] = WorkingHour::get();
        $data['features']      = Feature::get();
        $data['feed_backs']    = FeedBack::get();
        $data['doctors']       = Doctor::select('img','name','about')->where('is_top','=',1)->limit(3)->get();
        
        return view('web.index', $data);
    }
}

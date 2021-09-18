<?php

namespace App\Http\Controllers\web;

use App\Models\Doctor;
use App\Models\Feature;
use App\Models\Setting;
use App\Models\FeedBack;
use App\Models\WorkingHour;
use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['settings']      = Setting::where('active','=',1)->first();
        $data['slides']        = Slide::where('active','=',1)->limit(3)->get();
        $data['working_hours'] = WorkingHour::where('active','=',1)->limit(5)->get();
        $data['features']      = Feature::where('active','=',1)->limit(4)->get();
        $data['feed_backs']    = FeedBack::where('active','=',1)->get();
        $data['doctors']       = Doctor::select('img','name','about')->where('active','=',1)->limit(3)->get();
        
        return view('web.index', $data);
    }
}

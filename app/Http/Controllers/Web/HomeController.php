<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\{Setting, Doctor, Feature, Feedback, WorkingHour, Slide};

class HomeController extends Controller
{
    public function __invoke()
    {
        $data['settings']      = Setting::first();
        $data['slides']        = Slide::where('active','=',1)->limit(3)->get();
        $data['working_hours'] = WorkingHour::where('active','=',1)->limit(5)->get();
        $data['features']      = Feature::where('active','=',1)->limit(4)->get();
        $data['feedbacks']     = Feedback::where('active','=',1)->get();
        $data['doctors']       = Doctor::select('img','name','about')->where('active','=',1)->limit(3)->get();
        
        return view('web.index', $data);
    }
}
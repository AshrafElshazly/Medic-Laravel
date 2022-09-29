<?php

namespace App\Http\Controllers\Web;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    function index(){
        $data['settings']    = Setting::first();
        return view('web.news.index',$data);
    }
}

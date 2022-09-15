<?php

namespace App\Http\Controllers\web;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function __invoke()
    {
        $data['settings']    = Setting::first();
        return view('web.booking.index',$data);
    }
}

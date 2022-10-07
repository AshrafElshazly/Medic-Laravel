<?php

namespace App\Http\Repositories\Web;

use App\Models\Setting;
use App\Http\Interfaces\Web\BookingInterface;


class BookingRepository implements BookingInterface
{
    public function index()
    {
        $data['settings'] = Setting::first();
        return view('web.booking.index',$data);
    }
}
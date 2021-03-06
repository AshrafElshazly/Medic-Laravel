<?php

namespace App\Http\Controllers\web;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Message;

class ContactController extends Controller
{
    public function index()
    {
        $data['settings'] = Setting::where('active','=',1)->first();

        return view('web.contact.index',$data);     
    }

    public function store(Request $request)
    {
        $request->validate([
           'name'    => 'required|string|max:100',
           'email'   => 'required|email|max:100',
           'phone'   => 'required|numeric|max:15',
           'message' => 'required|string'
       ]);
       Message::create([
           'name'    => $request->name,
           'email'   => $request->email,
           'phone'   => $request->phone,
           'message' => $request->message,
       ])->save();

        return redirect()->back();
    }
}
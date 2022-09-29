<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactPostRequest;
use App\Models\{Setting, Message};

class ContactController extends Controller
{
    public function index()
    {
        $data['settings'] = Setting::first();

        return view('web.contact.index',$data);     
    }

    public function store(ContactPostRequest $request)
    {
       Message::create([
           'name'    => $request->name,
           'email'   => $request->email,
           'phone'   => $request->phone,
           'message' => $request->message,
       ])->save();

        return redirect()->back();
    }
}
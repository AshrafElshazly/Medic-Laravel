<?php

namespace App\Http\Controllers\web;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactPostRequest;
use App\Models\Message;

class ContactController extends Controller
{
    public function __invoke()
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
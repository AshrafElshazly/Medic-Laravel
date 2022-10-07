<?php 

namespace App\Http\Repositories\Web;

use App\Models\{Setting, Message};
use App\Http\Requests\ContactPostRequest;
use App\Http\Interfaces\Web\ContactInterface;


 class ContactRepository implements ContactInterface
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
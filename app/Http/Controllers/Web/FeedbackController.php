<?php

namespace App\Http\Controllers\Web;

use App\Models\Setting;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    function index()
    {
        $data['settings'] = Setting::where('active','=',1)->find(1);

        return view('web.feedback.index',$data);
    }

    function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:100',
            'email'       => 'required|email|max:100',
            'img'         => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'feedback'    => 'required|string'
        ]);

        $fileExtension = $request->img->getClientOriginalExtension();
        $fileName      = time().'.'.$fileExtension;
        $path = 'uploads/web/patients';
        $request->img->move($path,$fileName);

        Feedback::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'img'       => $fileName,
            'feedback'  => $request->feedback,
        ])->save();

         return redirect()->back();
    }
}
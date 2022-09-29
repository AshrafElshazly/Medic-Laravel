<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackPostRequest;
use App\Models\{Setting, Feedback};

class FeedbackController extends Controller
{
    function index()
    {
        $data['settings'] = Setting::first();

        return view('web.feedback.index',$data);
    }

    function store(FeedbackPostRequest $request)
    {

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
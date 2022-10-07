<?php 

namespace App\Http\Repositories\Web;

use App\Models\{Setting, Feedback};
use App\Http\Requests\FeedbackPostRequest;
use App\Http\Interfaces\Web\FeedbackInterface;
use App\Http\Traits\ImgTrait;

class FeedbackRepository implements FeedbackInterface
{
    use ImgTrait;

    function index()
    {
        $data['settings'] = Setting::first();

        return view('web.feedback.index',$data);
    }

    function store(FeedbackPostRequest $request)
    {
        $fileName = $this->SaveImg($request, 'uploads/web/patients');

        Feedback::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'img'       => $fileName,
            'feedback'  => $request->feedback,
        ])->save();

         return redirect()->back();
    }
}
<?php 

namespace App\Http\Repositories\Web;

use App\Models\{Setting, Feedback};
use App\Http\Requests\FeedbackPostRequest;
use App\Http\Interfaces\Web\FeedbackInterface;


class FeedbackRepository implements FeedbackInterface
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
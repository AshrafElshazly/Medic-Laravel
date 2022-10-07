<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackPostRequest;
use App\Http\Interfaces\Web\FeedbackInterface;

class FeedbackController extends Controller
{
    public $feedbackInterface;

    public function __construct(FeedbackInterface $feedbackInterface)
    {
        $this->feedbackInterface = $feedbackInterface;
    }
    
    function index()
    {
        return $this->feedbackInterface->index();
    }

    function store(FeedbackPostRequest $request)
    {
        return $this->feedbackInterface->store($request);
    }
}
<?php

namespace App\Http\Interfaces\Web;

use App\Http\Requests\FeedbackPostRequest;


interface FeedbackInterface
{
    public function index();
    function store(FeedbackPostRequest $request);
}
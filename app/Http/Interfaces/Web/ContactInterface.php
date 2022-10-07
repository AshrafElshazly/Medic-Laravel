<?php

namespace App\Http\Interfaces\Web;

use App\Http\Requests\ContactPostRequest;


interface ContactInterface
{
    public function index();
    public function store(ContactPostRequest $request);
}
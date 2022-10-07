<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactPostRequest;
use App\Http\Interfaces\Web\ContactInterface;

class ContactController extends Controller
{
    public $contactInterface;

    public function __construct(ContactInterface $contactInterface)
    {
        $this->contactInterface = $contactInterface; 
    }
    
    public function index()
    {
        return $this->contactInterface->index();
    }

    public function store(ContactPostRequest $request)
    {
        return $this->contactInterface->store($request);

    }
}
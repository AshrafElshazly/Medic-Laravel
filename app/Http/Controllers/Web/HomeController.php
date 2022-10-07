<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Web\HomeInterface;

class HomeController extends Controller
{
    public $homeInterface;

    public function __construct(HomeInterface $homeInterface)
    {
        $this->homeInterface = $homeInterface;
    }
    
    public function index()
    {
        return $this->homeInterface->index();
    }
}
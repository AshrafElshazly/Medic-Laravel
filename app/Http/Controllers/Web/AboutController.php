<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Web\AboutInterface;

class AboutController extends Controller
{
    public $aboutInterface;

    public function __construct(AboutInterface $aboutInterface)
    {
        $this->aboutInterface = $aboutInterface;
    }

    public function index()
    {
        return $this->aboutInterface->index();
    }
}
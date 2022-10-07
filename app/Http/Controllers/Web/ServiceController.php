<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Web\ServiceInterface;

class ServiceController extends Controller
{
    public $serviceInterface;

    public function __construct(ServiceInterface $serviceInterface)
    {
        $this->serviceInterface = $serviceInterface;
    }
    
    public function index()
    {
        return $this->serviceInterface->index();
    }
}
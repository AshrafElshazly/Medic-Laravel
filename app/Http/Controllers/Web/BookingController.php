<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Web\BookingInterface;

class BookingController extends Controller
{
    public $bookingInterface;

    public function __construct(BookingInterface $bookingInterface)
    {
        $this->bookingInterface = $bookingInterface;
    }
    
    public function index()
    {
        return $this->bookingInterface->index(); 
    }
}

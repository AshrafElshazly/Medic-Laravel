<?php

namespace App\Http\Controllers\web;


use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentPostRequest;
use App\Http\Interfaces\Web\AppointmentInterface;

class AppointmentController extends Controller
{

    public $appointmentInterface;

    public function __construct(AppointmentInterface $appointmentInterface)
    {
      $this->appointmentInterface = $appointmentInterface;
    }
    
    public function index()
    {
      return $this->appointmentInterface->index();
    }

    public function store(AppointmentPostRequest $request)
    {
      return $this->appointmentInterface->store($request);
    }

    public function getDoctors($id)
    {
      return $this->appointmentInterface->getDoctors($id);
    }
}
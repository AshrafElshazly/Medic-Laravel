<?php

namespace App\Http\Interfaces\Web;

use App\Http\Requests\AppointmentPostRequest;


interface AppointmentInterface
{
    public function index();
    public function store(AppointmentPostRequest $request);
    public function getDoctors($id);
}
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponseTrait;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    use ApiResponseTrait;

    public function appointments()
    {
        $data = Appointment::get();
        return $this->apiResponse(200,null,null,$data);
    }
}

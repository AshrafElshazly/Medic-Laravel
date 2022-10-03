<?php

namespace App\Http\Controllers\Api;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponseTrait;

class NewsController extends Controller
{
    use ApiResponseTrait;

    function index(){
        $data['settings'] = Setting::first();
        return $this->apiResponse(200,'test',null,$data);
    }
}

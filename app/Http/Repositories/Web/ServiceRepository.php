<?php 

namespace App\Http\Repositories\Web;

use App\Models\{Setting, Service};
use App\Http\Interfaces\Web\ServiceInterface;


 class ServiceRepository implements ServiceInterface
 {
    public function index()
    {
        $data['settings'] = Setting::first();
        $data['services'] = Service::where('active','=',1)->get();

        return view('web.service.index',$data);     
    }
 }
<?php 

namespace App\Http\Repositories\Web;

use App\Models\{Setting, About};
use App\Http\Interfaces\Web\AboutInterface;


 class AboutRepository implements AboutInterface
 {
    public function index()
    {
        $data['settings']  = Setting::first();
        $data['abouts']    = About::where('active','=',1)->first();

        return view('web.about.index',$data);
    }
 }
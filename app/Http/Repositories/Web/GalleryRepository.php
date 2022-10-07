<?php 

namespace App\Http\Repositories\Web;

use App\Models\{Setting, Shot};
use App\Http\Interfaces\Web\GalleryInterface;


 class GalleryRepository implements GalleryInterface
 {
    public function index()
    {
        $data['settings'] = Setting::first();
        $data['shots']    = Shot::where('active','=',1)->limit(6)->get();

        return view('web.gallery.index',$data);  
    }
 }
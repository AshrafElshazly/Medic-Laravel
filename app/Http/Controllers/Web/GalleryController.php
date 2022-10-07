<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Web\GalleryInterface;

class GalleryController extends Controller
{
    public $galleryInterface;

    public function __construct(GalleryInterface $galleryInterface)
    {
        $this->galleryInterface = $galleryInterface;
    }
    
    public function index()
    {
        return $this->galleryInterface->index();
    }
}
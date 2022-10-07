<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminHomeInterface;

class AdminHomeController extends Controller
{
    public $adminHomeInterface;

    public function __construct(AdminHomeInterface $adminHomeInterface)
    {
        $this->adminHomeInterface = $adminHomeInterface;
    }

    function index()
    {
        return $this->adminHomeInterface->index();
    }
}
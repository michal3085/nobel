<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function company()
    {
        return view('services.readyCompany');
    }
}

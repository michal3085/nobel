<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data['mainMenu'] = 'services';
    }

    public function company()
    {
        return view('services.readyCompany', $this->data);
    }
}

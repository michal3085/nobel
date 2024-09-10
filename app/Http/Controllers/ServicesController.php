<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

class ServicesController extends Controller
{
    private $views = [
        'gotowe-spolki' => 'readyCompany',
        'wirtualne-biuro' => 'virtualOffice',
    ];

    public function __construct()
    {
        parent::__construct();

        $this->data['mainMenu'] = 'services';
    }

    public function routeDispatch($service)
    {
        $this->data['subMenu'] = $service;

        return view('services.' . Arr::get($this->views, $service), $this->data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

class CoworkingController extends Controller
{
    private $views = [
        'oxford-tower' => 'oxfordTower',
        'wilanow-klimczaka-15' => 'wilanowKlimczaka15',
    ];

    public function __construct()
    {
        parent::__construct();

        $this->data['mainMenu'] = 'coworkingOffices';
    }

    public function routeDispatch($office)
    {
        $this->data['subMenu'] = $office;

        return view('office.' . Arr::get($this->views, $office) . '.coworking', $this->data);
    }
}

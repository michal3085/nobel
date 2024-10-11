<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class OfficeController extends Controller
{
    private $views = [
        'oxford-tower' => 'oxfordTower',
        'wola-panska-96' => 'wolaPanska',
        'carolina-medical-center' => 'medicalCenter',
        'herbu-jana-5' => 'hJ5',
        'wilanow-klimczaka-15' => 'wilanowKlimczaka15',
        'katowice-sokolska-30' => 'katowiceSokolska30',
    ];
    public function __construct()
    {
        parent::__construct();

        $this->data['mainMenu'] = 'offices';
    }

    public function routeDispatch($office)
    {
        $this->data['subMenu'] = $office;

        return view('office.' . Arr::get($this->views, $office) . '.index', $this->data);
    }
}

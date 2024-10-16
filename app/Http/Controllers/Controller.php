<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

abstract class Controller
{
    public $data = [];

    public function __construct()
    {
        $this->data['mainMenu'] = '';
        $this->data['subMenu'] = '';
        $this->data['tabMenu'] = '';
        $this->data['user'] = (Auth::check()) ? Auth::user()['name'] : null;
    }
}

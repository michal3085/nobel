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
        $this->data['authUser'] = (Auth::check()) ? Auth::user() : null;
    }
}

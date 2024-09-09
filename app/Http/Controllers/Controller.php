<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public $data = [];

    public function __construct()
    {
        $this->data['mainMenu'] = '';
        $this->data['subMenu'] = '';
        $this->data['tabMenu'] = '';
    }
}

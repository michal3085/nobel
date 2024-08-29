<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $this->data['mainMenu'] = 'dashboard';

        return view('main.index');
    }
}

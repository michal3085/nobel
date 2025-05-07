<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegAndPoliticsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function privatePolitics()
    {
        $this->data['mainMenu'] = 'private_politics';

        return view('regsAndPolitics.private', $this->data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data['mainMenu'] = 'contact';
    }

    public function index()
    {
        return view('contact.index', $this->data);
    }
}

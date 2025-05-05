<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class QuestionAnswerController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data['mainMenu'] = 'q&a';
    }

    public function index()
    {
        dd('ads');
    }
}

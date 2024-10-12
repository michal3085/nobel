<?php

namespace App\Http\Controllers;

class QuestionAnswerController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data['mainMenu'] = 'q&a';
    }

    public function index()
    {
        return view('qa.index', $this->data);
    }
}

<?php

namespace App\Http\Controllers\Dashboard\QA;

use App\Http\Controllers\Controller;
use App\Models\QA\QASection;
use App\Models\QA\QuestionAnswer;

class QuestionAnswerController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data['mainMenu'] = 'q&a';
        $this->data['sections'] = QASection::where('qa_section_active', 1)
            ->orderBy('qa_section_name', 'DESC')
            ->get();
    }

    public function index()
    {
        return view('dashboard.qa.index', $this->data);
    }
}

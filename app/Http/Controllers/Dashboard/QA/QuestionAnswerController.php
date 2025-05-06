<?php

namespace App\Http\Controllers\Dashboard\QA;

use App\Http\Controllers\Controller;
use App\Http\Requests\QA\QaThreadRequest;
use App\Models\QA\QASection;
use App\Models\QA\QuestionAnswer;
use DB;
use Exception;
use Illuminate\Support\Facades\Auth;
use Log;

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

    public function create(QASection $section)
    {
        $this->data['thread'] = new QuestionAnswer();
        $this->data['thread']->qa_section_id = $section->qa_section_id;

        return view('dashboard.qa.create', $this->data);
    }

    public function store(QaThreadRequest $request)
    {
        DB::beginTransaction();
        try {
            $thread = new QuestionAnswer();
            $thread->qa_author = Auth::user()->name;
            $thread->fill($request->validated());
            $thread->save();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();

            return redirect()->back()->withInput()->with('error', 'Błąd podczas dodawania wątku');
        }

        DB::commit();

        return redirect()->route('qa.edit', ['thread' => $thread])
            ->with('success', 'Wątek został dodany');
    }

    public function edit(QuestionAnswer $thread)
    {
        $this->data['thread'] = $thread;

        return view('dashboard.qa.edit', $this->data);
    }

    public function status(QuestionAnswer $thread)
    {
        $newStatus = $thread->qa_active === 1 ? 0 : 1;
        $thread->update(['qa_active' => $newStatus]);

        return redirect()->back()->with('success', 'Status został zmieniony');
    }

    public function update(QaThreadRequest $request, QuestionAnswer $thread)
    {
        DB::beginTransaction();
        try {
            $thread->qa_author = Auth::user()->name;
            $thread->fill($request->validated());
            $thread->save();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();

            return redirect()->back()->withInput()->with('error', 'Błąd podczas aktualizacji wątku');
        }

        DB::commit();

        return redirect()->route('qa.edit', ['thread' => $thread])
            ->with('success', 'Wątek został zaktualizowany');
    }
}

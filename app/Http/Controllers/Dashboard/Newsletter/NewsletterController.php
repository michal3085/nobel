<?php

namespace App\Http\Controllers\Dashboard\Newsletter;

use App\Http\Controllers\Controller;
use App\Http\Requests\Newsletter\NewsletterStoreRequest;
use App\Http\Requests\Newsletter\NewsletterUpdateRequest;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use DB;
use Exception;
use Illuminate\Support\Facades\Auth;
use Log;

class NewsletterController extends Controller
{
    public function index()
    {
        $this->data['newsletters'] = Newsletter::orderBy('created_at', 'desc')->get();

        return view('dashboard.newsletter.index', $this->data);
    }

    public function create()
    {
        $this->data['newsletter'] = new Newsletter();

        return view('dashboard.newsletter.create', $this->data);
    }

    public function store(NewsletterStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $newsletter = new Newsletter();
            $newsletter->newsletter_author = Auth::user()->name;
            $newsletter->fill($request->validated());
            $newsletter->save();
        } catch (Exception $e) {
            dd($e->getMessage());
            Log::error($e->getMessage());
            DB::rollBack();

            return redirect()->back()->withInput()->with('error', 'Błąd w trakcie dodawania newslettera');
        }
        DB::commit();

        return redirect()->route('newsletter.edit', ['newsletter' => $newsletter])
            ->with('success', 'Newsletter dodany');
    }

    public function edit(Newsletter $newsletter)
    {
        $this->data['newsletter'] = $newsletter;

        return view('dashboard.newsletter.edit', $this->data);
    }

    public function update(NewsletterUpdateRequest $request, Newsletter $newsletter)
    {
        DB::beginTransaction();

        try {
            $newsletter->newsletter_author = Auth::user()->name;
            $newsletter->fill($request->validated());
            $newsletter->save();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();

            return redirect()->back()->withInput()->with('error', 'Błąd podczas aktualizacji newslettera');
        }

        DB::commit();

        return redirect()->route('newsletter.edit', ['newsletter' => $newsletter])
            ->with('success', 'Newsletter zaktualizowany');
    }
}

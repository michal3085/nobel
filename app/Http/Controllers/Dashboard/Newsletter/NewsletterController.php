<?php

namespace App\Http\Controllers\Dashboard\Newsletter;

use App\Http\Controllers\Controller;
use App\Http\Requests\Newsletter\NewsletterStoreRequest;
use App\Http\Requests\Newsletter\NewsletterUpdateRequest;
use App\Models\Newsletter;
use App\Services\Newsletter\SendService;
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
            Log::error($e->getMessage());
            DB::rollBack();

            return redirect()->back()->withInput()->with('error', 'Błąd w trakcie dodawania newslettera');
        }
        DB::commit();

        return redirect()->route('newsletter.edit', ['newsletter' => $newsletter])
            ->with('success', 'NewsletterMail dodany');
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
            ->with('success', 'NewsletterMail zaktualizowany');
    }

    public function status(Newsletter $newsletter)
    {
        $newStatus = $newsletter->newsletter_active === 1 ? 0 : 1;
        $newsletter->update(['newsletter_active' => $newStatus]);

        return redirect()->back()->with('success', 'Status został zmieniony');
    }

    public function delete(Newsletter $newsletter)
    {
        DB::beginTransaction();
        try {
            $newsletter->delete();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();

            return redirect()->back()->withInput()->with('error', 'Błąd w trakcie usuwania newslettera');
        }
        DB::commit();

        return redirect()->back()->with('success', 'NewsletterMail usunięty');
    }

    public function send(Newsletter $newsletter, SendService $sendService)
    {
        $sendService->doService($newsletter);

        return redirect()->back()->with('success', 'Wysyłka zakończona');
    }

    public function sentList(Newsletter $newsletter)
    {
        $this->data['newsletter'] = $newsletter;
        $this->data['recipients'] = $newsletter->relationRecipients;

        return view('dashboard.newsletter.recipients', $this->data);
    }
}

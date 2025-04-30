<?php

namespace App\Http\Controllers\Dashboard\Newsletter;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriberRequest;
use App\Models\Newsletter\Subscriber;
use DB;
use Exception;
use Log;

class SubscribersController extends Controller
{
    public function index()
    {
        $this->data['subscribers'] = Subscriber::orderBy('created_at', 'desc')->get();

        return view('dashboard.newsletter.subscribers.index', $this->data);
    }

    public function store(SubscriberRequest $request)
    {
        DB::beginTransaction();
        try {
            $subscriber = new Subscriber();
            $subscriber->fill($request->validated());
            $subscriber->save();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();

            return redirect()->back()->withInput()->with('error', 'Błąd w trakcie dodawania subskrypcji');
        }
        DB::commit();

        return redirect()->back()->withInput()->with('success', 'Newsletter dodany');
    }

    public function status(Subscriber $subscriber)
    {
        $newStatus = $subscriber->ns_active === 1 ? 0 : 1;
        $subscriber->update(['ns_active' => $newStatus]);

        return redirect()->back()->with('success', 'Status został zmieniony');
    }

    public function delete(Subscriber $subscriber)
    {
        DB::beginTransaction();
        try {
            $subscriber->delete();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();

            return redirect()->back()->withInput()->with('error', 'Błąd w trakcie usuwania subskrypcji');
        }
        DB::commit();

        return redirect()->back()->with('success', 'Subskrypcja usunięta');
    }
}

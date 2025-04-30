<?php

namespace App\Http\Controllers\Dashboard\Newsletter;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriberRequest;
use App\Models\Newsletter\Subscriber;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Log;
use Exception;

class SubscribersController extends Controller
{
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
}

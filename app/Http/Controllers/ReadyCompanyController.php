<?php

namespace App\Http\Controllers;

use App\Http\Requests\Services\ReadyCompanyMailRequest;
use App\Mail\Services\ReadyCompanyMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ReadyCompanyController extends Controller
{
    public function sendMail(ReadyCompanyMailRequest $request)
    {
        if (Mail::to(env('CONTACT_OFFICE_MAIL_TO'))->send(new ReadyCompanyMail($request))) {
            Session::flash('success', 'Wiadomość wysłana');
            return response()->json(['success' => true], 200);
        }
        return response()->json(['success' => false, 'msg' => 'Błąd wysyłki zpytania'], 500);
    }
}

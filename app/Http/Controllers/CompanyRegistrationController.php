<?php

namespace App\Http\Controllers;

use App\Http\Requests\Services\CompanyRegistrationMailRequest;
use App\Mail\Services\CompanyRegistrationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CompanyRegistrationController extends Controller
{
    public function sendMail(CompanyRegistrationMailRequest $request)
    {
        if (Mail::to(env('CONTACT_OFFICE_MAIL_TO'))->send(new CompanyRegistrationMail($request))) {
            Session::flash('success', 'Wiadomość wysłana');
            return response()->json(['success' => true], 200);
        }
        return response()->json(['success' => false, 'msg' => 'Błąd wysyłki zpytania'], 500);
    }
}

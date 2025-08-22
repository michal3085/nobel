<?php

namespace App\Http\Controllers;

use App\Http\Requests\Services\KrsMailRequest;
use App\Http\Requests\Services\MailRequest;
use App\Mail\Services\KrsMail;
use App\Mail\Services\VirtualOfficeMail;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class ServicesController extends Controller
{
    private $views = [
        'sprzedaz-spolek' => 'saleOfCompanies',
        'wirtualne-biuro' => 'virtualOffice',
        'rejestracja-spolki' => 'companyRegistration',
        'gotowe-biura' => 'readyOffice',
        'zmiany-krs' => 'krsChanges',
        'coworking' => 'coworkingOffice',
    ];

    public function __construct()
    {
        parent::__construct();

        $this->data['mainMenu'] = 'services';
    }

    public function routeDispatch($service)
    {
        $this->data['subMenu'] = $service;

        $view = Arr::get($this->views, $service);

        if (! $view) {
            abort(404);
        }

        return view('Services.' . $view, $this->data);
    }

    public function sendMail(MailRequest $request)
    {
        if (Mail::to(env('CONTACT_OFFICE_MAIL_TO'))->send(new VirtualOfficeMail($request))) {
            Session::flash('success', 'Wiadomość wysłana');
            return response()->json(['success' => true], 200);
        }
        return response()->json(['success' => false, 'msg' => 'Błąd wysyłki zapytania'], 500);
    }

    public function krsMailSend(KrsMailRequest $request)
    {
        try {
            Mail::to(env('CONTACT_OFFICE_MAIL_TO'))->send(new KrsMail($request));
            Session::flash('success', 'Wiadomość wysłana');
        } catch (\Exception $exception) {
            Log::info('[ZMIANY W KRS] - WYSYŁKA MAILA');
            Log::error($exception->getMessage());
            Session::flash('success', 'Wiadomość nie została wysłana');
            return response()->json(['success' => false, 'msg' => 'Błąd wysyłki zapytania'], 500);
        }
        return response()->json(['success' => true], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Services\MailRequest;
use App\Mail\Services\VirtualOfficeMail;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class ServicesController extends Controller
{
    private $views = [
        'gotowe-spolki' => 'readyCompany',
        'wirtualne-biuro' => 'virtualOffice',
    ];

    public function __construct()
    {
        parent::__construct();

        $this->data['mainMenu'] = 'services';
    }

    public function routeDispatch($service)
    {
        $this->data['subMenu'] = $service;

        return view('services.' . Arr::get($this->views, $service), $this->data);
    }

    public function sendMail(MailRequest $request)
    {
        if (Mail::to(env('VIRTUAL_OFFICE_MAIL_TO'))->send(new VirtualOfficeMail($request))) {
            return response()->json(['success' => true], 200);
        }
        return response()->json(['success' => false, 'msg' => 'Błąd wysyłki zpytania'], 500);
    }
}

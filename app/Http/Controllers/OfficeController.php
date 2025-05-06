<?php

namespace App\Http\Controllers;

use App\Http\Requests\Office\MailRequest;
use App\Mail\Office\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class OfficeController extends Controller
{
    private $views = [
        'oxford-tower' => 'oxfordTower',
        'wola-panska-96' => 'wolaPanska',
        'carolina-medical-center' => 'medicalCenter',
        'herbu-jana-5' => 'hJ5',
        'wilanow-klimczaka-15' => 'wilanowKlimczaka15',
        'katowice-sokolska-30' => 'katowiceSokolska30',
        'piekna' => 'piekna',
    ];

    public function __construct()
    {
        parent::__construct();

        $this->data['mainMenu'] = 'offices';
    }

    public function routeDispatch($office)
    {
        $this->data['subMenu'] = $office;

        return view('office.' . Arr::get($this->views, $office) . '.index', $this->data);
    }

    public function sendMail(MailRequest $request)
    {
        if (Mail::to(env('CONTACT_OFFICE_MAIL_TO'))->send(new ContactMail($request))) {
            Session::flash('success', 'Wiadomość wysłana');
            return response()->json(['success' => true], 200);
        }
        return response()->json(['success' => false, 'msg' => 'Błąd wysyłki zpytania'], 500);
    }
}

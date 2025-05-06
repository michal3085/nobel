<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data['mainMenu'] = 'contact';
    }

    public function index()
    {
        return view('contact.index', $this->data);
    }

    public function send(Request $request)
    {
        if (Mail::to(env('CONTACT_OFFICE_MAIL_TO'))->send(new ContactMail($request))) {
            Session::flash('success', 'Wiadomość wysłana');
            return redirect()->back()->with(['success' => 'Wiadomość wysłana']);
        }
        return redirect()->back()->with(['success' => 'Błąd wysyłania wiadomości']);
    }
}

<?php

namespace App\Http\Controllers\Dashboard\Newsletter;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        $this->data['newsletters'] = Newsletter::all();

        return view('dashboard.newsletter.index', $this->data);
    }

    public function create()
    {
        $this->data['newsletter'] = new Newsletter();

        return view('dashboard.newsletter.create', $this->data);
    }

    public function store(Request $request)
    {

    }
}

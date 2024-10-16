<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['posts'] = Post::orderBy('created_at', 'desc')->get();

        return view('dashboard.index', $this->data);
    }
}

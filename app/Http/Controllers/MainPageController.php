<?php

namespace App\Http\Controllers;

use App\Models\Post;

class MainPageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['mainMenu'] = 'dashboard';
        $this->data['posts'] = Post::where('post_active', 'true')
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();

        return view('main.index', $this->data);
    }
}

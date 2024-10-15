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
        $this->data['posts'] = Post::orderBy('created_at', 'desc')->limit(4)->get();

        foreach ($this->data['posts'] as $post) {
//            dd($post->getPostImage());
        }

        return view('main.index', $this->data);
    }
}

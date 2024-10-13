<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;

class BlogController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        $this->data['post'] = new Post();
        return view('dashboard.blog.create', $this->data);
    }

    public function store(PostStoreRequest $request)
    {

    }
}

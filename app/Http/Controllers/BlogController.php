<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        $this->data['blog'] = new Post();
        return view('dashboard.blog.create', $this->data);
    }
}

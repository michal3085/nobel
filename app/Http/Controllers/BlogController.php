<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

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
        DB::beginTransaction();
        try {
            $post = new Post();
            $post->fill($request->all());
            $post->save();
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage());
            Session::flash('error', 'Wiadomość nie została wysłana');
            return redirect()->back();
        }
        DB::commit();
        Session::flash('success', 'Post został zapisany');
        return redirect()->route('dashboard');
    }
}

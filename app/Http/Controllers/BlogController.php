<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Storage;


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
            $file = $request->file('post_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = Str::uuid() . '.' . $extension;

            $post = new Post();
            $post->post_title = $request['post_title'];
            $post->post_text = $request['post_text'];
            $post->post_description = $request['post_description'];
            $post->post_image = $fileName;
            $post->post_author = Auth::user()->name;
            $post->post_active  = $request['post_active'];
            $post->author_id = auth()->user()->id;
            $post->save();

            $file->storeAs($post->getPostFileDirectoryPath(), $fileName, Post::DISK_NAME);
            Session::flash('success', 'Post został zapisany');
        } catch (\Exception $exception) {
            DB::rollBack();
            if (Storage::disk(Post::DISK_NAME)->exists($post->getPostFileDirectoryPath() . '/' . $fileName)) {
                Storage::disk(Post::DISK_NAME)->delete($post->getPostFileDirectoryPath() . '/' . $fileName);
            }
            Log::error($exception->getMessage());
            Session::flash('error', 'Błąd podczas dodawania postu');
            return redirect()->back();
        }
        DB::commit();
        Session::flash('success', 'Post został zapisany');
        return redirect()->route('dashboard');
    }

    public function showForGuest(Post $post)
    {
        $this->data['post'] = $post;
        return view('blog.show', $this->data);
    }

    public function showAllGuest()
    {
        $this->data['posts'] = Post::where('post_active', 'true')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('blog.showAll', $this->data);
    }

    public function edit(Post $post)
    {
        $this->data['post'] = $post;
        return view('dashboard.blog.edit', $this->data);
    }

    public function update(Post $post, PostStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $post->post_title = $request['post_title'];
            $post->post_text = $request['post_text'];
            $post->post_description = $request['post_description'];
            $post->post_author = Auth::user()->name;
            $post->post_active  = $request['post_active'];
            $post->author_id = auth()->user()->id;

            if ($request->hasFile('post_image')) {
                $prevPostImage = $post->post_image;
                $file = $request->file('post_image');
                $extension = $file->getClientOriginalExtension();
                $fileName = Str::uuid() . '.' . $extension;
                $file->storeAs($post->getPostFileDirectoryPath(), $fileName, Post::DISK_NAME);
                $post->post_image = $fileName;

                if (Storage::disk(Post::DISK_NAME)->exists($post->getPostFileDirectoryPath() . '/' . $prevPostImage)) {
                    Storage::disk(Post::DISK_NAME)->delete($post->getPostFileDirectoryPath() . '/' . $prevPostImage);
                }
            }

            $post->save();
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage());
            Session::flash('error', 'Błąd podczas aktualizacji postu');
            return redirect()->back();
        }
        DB::commit();
        Session::flash('success', 'Post został zaktualizowany');
        return redirect()->route('dashboard');
    }

    public function destroy(Post $post)
    {
        DB::beginTransaction();
        try {
            if (Storage::disk(Post::DISK_NAME)->exists($post->getPostFileDirectoryPath() . '/' . $post->post_image)) {
                Storage::disk(Post::DISK_NAME)->delete($post->getPostFileDirectoryPath() . '/' . $post->post_image);
            }
            $post->delete();
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage());
            Session::flash('error', 'Błąd podczas usuwania postu');
            return redirect()->back();
        }
        DB::commit();
        Session::flash('success', 'Post został usunięty');
        return redirect()->route('dashboard');
    }

    public function changeStatus(Post $post)
    {
        $newStatus = $post->post_active === 'true' ? 'false' : 'true';
        $post->update(['post_active' => $newStatus]);

        return redirect()->back()->with('success', 'Status posta został zmieniony');
    }
}

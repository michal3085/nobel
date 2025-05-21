<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    public function index()
    {
        Gate::authorize('view', Auth::user());

        $this->data['users'] = User::orderBy('created_at', 'DESC')->get();

        return view('dashboard.user.index', $this->data);
    }

    public function create()
    {
        Gate::authorize('create', Auth::user());

        $this->data['newUser'] = new User();

        return view('dashboard.user.create', $this->data);
    }
}

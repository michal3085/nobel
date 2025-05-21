<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use DB;
use Exception;
use Log;

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

    public function store(StoreRequest $request)
    {
        Gate::authorize('create', Auth::user());

        DB::beginTransaction();
        try {
            $newUser = new User();
            $newUser->fill($request->validated());
            $newUser->save();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();

            return redirect()->back()->withInput()->with('error', 'Błąd w trakcie dodawania newslettera');
        }
        DB::commit();

        return redirect()->route('user.edit', ['user' => $newUser])
            ->with('success', 'Użytkownik dodany');
    }

    public function edit(User $user)
    {
        Gate::authorize('edit', $user);

        $this->data['user'] = $user;

        return view('dashboard.user.edit', $this->data);
    }

    public function update(UpdateRequest $request, User $user)
    {
        Gate::authorize('update', $user);

        DB::beginTransaction();
        try {
            $data = $request->validated();

            // Jeśli hasło nie zostało podane, usuwamy je z danych do aktualizacji
            if (empty($data['password'])) {
                unset($data['password']);
            }

            $user->fill($data);
            $user->save();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();

            return redirect()->back()->withInput()->with('error', 'Błąd w trakcie aktualizacji użytkownika');
        }
        DB::commit();

        return redirect()->route('user.edit', ['user' => $user])
            ->with('success', 'Użytkownik został zaktualizowany');
    }

    public function delete(User $user)
    {
        DB::beginTransaction();
        try {
            $user->delete();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();

            return redirect()->back()->withInput()->with('error', 'Błąd w trakcie usuwania użytkownika');
        }
        DB::commit();

        return redirect()->back()->with('success', 'Użytkownik usunięty');
    }
}

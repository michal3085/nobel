@extends('dashboard._layout')

@section('buttons')
    <div class="col-auto">
        @if ($authUser->isAdmin())
            <a href="{{ route('user.index') }}" class="btn btn-success me-1 mb-1">Powrót</a>
        @else
            <a href="{{ route('dashboard') }}" class="btn btn-success me-1 mb-1">Powrót</a>
        @endif
    </div>
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edycja użytkownika - {{ $user->name }}</h5>
            <form method="POST" action="{{route('user.update', ['user' => $user])}}" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                <div class="row">
                    @include('dashboard.user._form', ['formObject' => $user, 'update' => false])
                </div>

                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-success me-1 mb-1">Zapisz</button>
                </div>
            </form>
        </div>
    </div>
@endsection

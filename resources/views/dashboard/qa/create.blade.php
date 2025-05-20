@extends('dashboard._layout')

@section('buttons')
    <div class="col-auto">
        <a href="{{ route('qa.index') }}" class="btn btn-success me-1 mb-1">Powrót</a>
    </div>
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Stwórz nowy wątek</h5>
            <form method="POST" action="{{route('qa.store')}}" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="POST">

                <div class="row">
                    @include('dashboard.qa._form', ['formObject' => $thread, 'update' => false])
                </div>

                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-success me-1 mb-1">PUBLIKUJ</button>
                </div>
            </form>
{{--            <div class="col-12">--}}
{{--                @include('dashboard.qa._preview')--}}
{{--            </div>--}}
        </div>
    </div>
@endsection

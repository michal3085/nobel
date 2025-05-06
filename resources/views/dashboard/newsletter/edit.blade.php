@extends('dashboard._layout')

@section('buttons')
    <div class="col-auto">
        <a href="{{ route('newsletter.index') }}" class="btn btn-success me-1 mb-1">Powrót</a>
    </div>
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edycja / {{$newsletter->newsletter_subject}}</h5>
            <form method="POST" action="{{route('newsletter.update', $newsletter)}}" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                <div class="row">
                    @include('dashboard.newsletter._form', ['formObject' => $newsletter, 'update' => true])
                </div>

                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-success me-1 mb-1">POBLIKUJ</button>
                </div>
            </form>
        </div>
    </div>
@endsection

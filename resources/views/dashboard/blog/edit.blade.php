@extends('dashboard._layout')

@section('buttons')
    <div class="col-auto">
        <a href="{{ route('dashboard') }}" class="btn btn-success me-1 mb-1">Powrót</a>
    </div>
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edycja / {{$post->post_title}}</h5>
            <form method="POST" action="{{route('blog.update', $post)}}" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                <div class="row">
                    @include('dashboard.blog._form', ['formObject' => $post, 'update' => true])
                </div>

                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-success me-1 mb-1">POBLIKUJ</button>
                </div>
            </form>
        </div>
    </div>
@endsection

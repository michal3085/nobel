@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container py-13 py-md-17 text-center">
            <br>

            @include('main.sections._services')
            @include('main.sections._blog', ['showAll' => false])

        </div>
    </section>
@endsection

@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-15 pb-md-17">
            <br>

            @include('main.sections._services')
            @include('main.sections._blog')

        </div>
    </section>
@endsection

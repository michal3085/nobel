@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">GOTOWE BIURO</span>
                </h3>
            </div>
            <br>
            <br>
                @include('Services._offices')
        </div>
    </section>


@endsection

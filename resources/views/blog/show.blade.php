@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
{{--        <div class="container pb-3 pb-md-7">--}}
{{--            <div class="col-lg-12 text-center text-lg-start">--}}
{{--                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">--}}
{{--                    <span class="underline-3 style-2 yellow">{{$post->post_title}}</span>--}}
{{--                </h3>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--        </div>--}}

        <div class="card bg-soft-primary rounded-4 position-relative overflow-hidden"
             style="background: url('{{ $post->getPostImage() }}') center/cover no-repeat;">
            <!-- Mocniejsze nakładki dla lepszego kontrastu -->
            <div class="position-absolute w-100 h-100 top-0 start-0"
                 style="background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.1) 100%);"></div>

            <div class="card-body p-md-10 p-xl-11 position-relative">
                <div class="row gx-lg-8 gx-xl-12 gy-10">
                    <div class="col-lg-12 text-center">
                        <!-- Tekst z podwójnym zabezpieczeniem czytelności -->
                        <h3 class="display-4 mb-4 fw-bold text-white"
                            style="
                        color: white !important;
                        text-shadow:
                            0 2px 10px rgba(0,0,0,0.9),
                            0 2px 20px rgba(0,0,0,0.8);
                        position: relative;
                        display: inline-block;
                        padding: 0.5rem 1.5rem;
                        background: rgba(0,0,0,0.25);
                        backdrop-filter: blur(3px);
                        border-radius: 8px;
                        border: 1px solid rgba(255,255,255,0.15);
                    ">
                            {{$post->post_title}}
                        </h3>
                    </div>
                </div>
            </div>
        </div>


{{--        <div class="container-fluid p-0">--}}
{{--            <div class="banner">--}}
{{--                <img src="{{$post->getPostImage()}}" class="img-fluid w-100 rounded" alt="{{$post->post_title}}" style="height: 250px; object-fit: cover;">--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- /.nav-tabs -->
        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tab3-1">
                <div class="col-lg-12">
                    <p class="mb-6">
                        {!! $post->post_text !!}
                    </p>
                </div>
                <!--/.tab-pane -->
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <span>
                <a class="btn btn-primary rounded-pill" href="/">Powrót</a>
            </span>
        </div>
    </section>

@endsection

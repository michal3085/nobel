@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">{{$post->post_title}}</span>
                </h3>
            </div>
            <br>
        </div>

        <div class="container-fluid p-0">
            <div class="banner">
                <img src="{{$post->getPostImage()}}" class="img-fluid w-100 rounded" alt="{{$post->post_title}}" style="height: 250px; object-fit: cover;">
            </div>
        </div>

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

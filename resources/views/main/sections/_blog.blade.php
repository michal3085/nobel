<!-- ELEMENT WYKORZYSTYWANY W /blog/showAll.blade.php i /main/index.blade.php -->
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-6">
        <div class="row">
            <div class="col-lg-12 mx-auto"> <!-- Zmiana z col-lg-10 na col-lg-12 -->

                    <div class="col-lg-12 text-center text-lg-start"> <!-- Zmiana z col-lg-7 na col-lg-12 -->
                        <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15"><span class="underline-3 style-2 yellow">Blog</span> </h3>
                    </div>
                    <div class="row g-4 mt-2 mb-3">
                        @if ($posts->count() > 0)
                            @foreach($posts as $post)
                                <div class="col-md-4">
                                    <div class="card h-100 shadow-sm border" style="border-color: rgba(0,0,0,0.1) !important;">
                                        <a href="{{ route('blog.show.guest', ['post' => $post]) }}" class="text-decoration-none">
                                            <div class="ratio ratio-16x9 bg-light overflow-hidden rounded-top">
                                                <img
                                                    src="{{ $post->getPostImage() }}"
                                                    alt="{{ $post->post_title }}"
                                                    class="img-fluid object-fit-cover w-100 h-100"
                                                >
                                            </div>
                                        </a>
                                        <div class="card-body d-flex flex-column">
                                            <a href="{{ route('blog.show.guest', ['post' => $post]) }}" class="text-decoration-none text-dark">
                                                <h5 class="card-title text-yellow">{{ $post->post_title }}</h5>
                                            </a>
                                            <p class="card-text flex-grow-1 text-truncate-3">
                                                {!! Str::limit(strip_tags($post->post_text), 100) !!}
                                            </p>
                                            <div class="mt-auto">
                                                <small class="text-muted">
                                                    <i class="far fa-calendar-alt me-1"></i>
                                                    {{ $post->created_at->format('d.m.Y') }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12">
                                <div class="alert alert-info">Brak postów</div>
                            </div>
                        @endif
                    </div>
                    <!-- /.row -->
                    @if ($showAll === false && $posts->count() > 0)
                        <div class="d-flex justify-content-center">
                            <span>
                                <a class="btn btn-yellow rounded-pill" href="{{route('blog.show.all')}}">Pozostałe posty</a>
                            </span>
                        </div>
                    @elseif ($showAll)
                        <div class="d-flex justify-content-center">
                            <span>
                                <a class="btn btn-yellow rounded-pill" href="{{route('main')}}">Strona główna</a>
                            </span>
                        </div>
                    @endif

                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<!-- ELEMENT WYKORZYSTYWANY W /blog/showAll.blade.php i /main/index.blade.php -->
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-12 mx-auto"> <!-- Zmiana z col-lg-10 na col-lg-12 -->
                <div class="blog grid grid-view">
                    <div class="col-lg-12 text-center text-lg-start"> <!-- Zmiana z col-lg-7 na col-lg-12 -->
                        <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15"><span class="underline-3 style-2 yellow">Blog</span> </h3>
                    </div>
                    <div class="row isotope gx-md-8 gy-8 mb-8 mt-7">
                        @if ($posts->count() > 0)
                            @foreach($posts as $post)
                                <article class="item post col-md-4">
                                    <div class="card h-100 d-flex flex-column">
                                        <figure class="card-img-top overlay overlay-1 hover-scale" style="height: 250px; overflow: hidden;">
                                            <a href="{{route('blog.show.guest', ['post' => $post])}}">
                                                <img src="{{$post->getPostImage()}}" alt="" class="img-fluid" style="height: 100%; width: 100%; object-fit: cover;" />
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body d-flex flex-column">
                                            <div class="post-header">
                                                <div class="post-category  h3">
                                                    <a href="{{route('blog.show.guest', ['post' => $post])}}" class="hover" rel="category" style="color: #f0d91d">{{$post->post_title}}</a>
                                                </div>
                                            </div>
                                            <div class="post-content flex-grow-1">
                                                <!-- Ustawienie maksymalnej wysokości dla tekstu -->
                                                <p class="text-break" style="height: 5em; overflow: hidden;">
                                                    {{ Str::limit(strip_tags($post->post_text), 151) }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer mt-auto">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$post->created_at}}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <!-- /.post -->
                            @endforeach
                        @else
                            <p>Brak postów do wyświetlenia</p>
                        @endif

                    </div>
                    <!-- /.row -->
                    @if ($showAll === false)
                        <div class="d-flex justify-content-center">
                            <span>
                                <a class="btn btn-primary rounded-pill" href="{{route('blog.show.all')}}" style="background-color: #f0d91d; border-color: #f0d91d; color: black">Pozostałe posty</a>
                            </span>
                        </div>
                    @endif
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


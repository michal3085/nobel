@extends('_layout')

@section('content')
    <section class="wrapper bg-light">

        <div class="container py-5">
            <div class="row mt-6">
                <div class="col-xl-12 mx-auto">
                    <div class="projects-tiles">
                        <!-- /.project -->
                        <div class="project grid grid-view">
                            <div class="row g-6 isotope">
                                <div class="item col-md-6">
                                    <div class="project-details d-flex justify-content-center flex-column">
                                        <div class="post-header">
                                            <div class="post-category text-green mb-3">Concept</div>
                                            <h2 class="underline-3 style-2 green">Chałubińskiego 8 Śródmieście</h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p style="text-align: justify">W pełni wyposażone biura w samym sercu Warszawy. Doskonała lokalizacja – kultowy biurowiec przy ulicy Chałubińskiego 8. Doskonały dojazd z i do każdej części miasta, liczne lokale usługowe, gastronomiczne w bliskim sąsiedztwie oraz sala konferencyjna gwarancja idealnego miejsca do prowadzenia Twojej działalności.</p>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.project-details -->
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Purus Tellus Magna</h5>'><a href="{{asset('/assets/img/photos/cs4-full.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/oxf/1.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Fusce Ipsum Vestibulum</h5>'><a href="/assets/img/photos/cs5-full.jpg" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="{{asset('assets/img/offices/oxf/2.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Condimentum Parturient Ligula</h5>'><a href="/assets/img/photos/cs6-full.jpg" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2"> <img src="{{asset('assets/img/offices/oxf/6.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.projects-tiles -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>

        <div class="container-fluid px-md-6 mt-4">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 d-block" style="height: 450px; border:0;"
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2443.9477567338554!2d21.00104917691333!3d52.22616695794225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sOXFORD%20TOWER%20CH8%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cfigure%20class%3D%22rounded%20overflow-hidden%22%20style%3D%22aspect-ratio%3A%201%2F1%3B%22%3E%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cimg%20src%3D%22%7B%7Basset(&#39;assets%2Fimg%2Foffices%2Foxf%2F3.jpg&#39;)%7D%7D%22%20alt%3D%22%22%20class%3D%22img-fluid%20w-100%20h-100%20object-fit-cover%22%20%2F%3E%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Ffigure%3E%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fdiv%3E!5e0!3m2!1spl!2spl!4v1738712996309!5m2!1spl!2spl"
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

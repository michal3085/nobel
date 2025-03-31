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
                                            <div class="post-category text-purple mb-3">Lokalizacja</div>
                                            <h2 class="underline-3 style-2 purple">Wilanów Klimczaka 15</h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p style="text-align: justify">
                                                Lokalizacja położona  w samym sercu Miasteczka Wilanów u zbiegu alei Rzeczypospolitej i Klimczaka. W przestrzeni oprócz gotowych do pracy gabinetów znajdziesz także przestrzeń coworkingową, którą możesz dzielić ze znajomymi sąsiadami z osiedla.
                                                Wynajem dedykowanego biurka w większej przestrzeni jest idealnym rozwiązaniem dla osób i firm poszukujących taniego, ale elastycznego i inspirującego miejsca do pracy w pobliżu miejsca zamieszkania.
                                                Ponadto, coworking w Wilanowie to również świetna okazja do nawiązywania wartościowych kontaktów biznesowych i współpracy z innymi profesjonalistami.
                                            </p>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.project-details -->
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Purus Tellus Magna</h5>'><a href="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-6.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-6.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Fusce Ipsum Vestibulum</h5>'><a href="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-8.jpg')}}" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-8.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Condimentum Parturient Ligula</h5>'><a href="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-7.jpg')}}" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2"> <img src="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-7.jpg')}}" alt="" /></a>
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2447.6083799687517!2d21.071689844278474!3d52.15963136611365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47192d5d3500fdcb%3A0xe24d39a432c49fd3!2sKlimczaka%2015%2C%2002-797%20Warszawa!5e0!3m2!1spl!2spl!4v1740766816197!5m2!1spl!2spl"
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>


    </section>

@endsection

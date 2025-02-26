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
                                            <div class="post-category text-yellow mb-3">Lokalizacja</div>
                                            <h2 class="underline-3 style-2 yellow">MOKOTÓW CAROLINA MEDICAL CENTER6</h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>
                                                Biuro usytuowane w zacisznym i malowniczym zakątku Warszawy w pobliżu dzielnic: Wawer, Wilanów i Ursynów. Piękny widok z 12 pietra na zieloną część miasta oraz na warszawskie City ukoi Twoje zmysły. Serwisowane biura zlokalizowane w Multis Plaza to doskonała propozycja dla tych, którzy cenią pracę z dala od wielkomiejskiego szumu, jednocześnie pozostając w bliskim sąsiedztwie centrum miasta.
                                                <br>
                                                Na warszawskim Mokotowie czeka na Ciebie kilkanaście wyposażonych i gotowych do pracy gabinetów oraz sala konferencyjna. Miła obsługa odbierze Twoją korespondencję oraz przywita gości.
                                                <br>
                                                W tej lokalizacji gwarantujemy również Wirtualne Biura.
                                            </p>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.project-details -->
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Purus Tellus Magna</h5>'><a href="{{asset('assets/img/offices/carolina/WIDOK.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/carolina/WIDOK.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Fusce Ipsum Vestibulum</h5>'><a href="{{asset('assets/img/offices/carolina/SALKA_12P.jpg')}}" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="{{asset('assets/img/offices/carolina/SALKA_12P.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Condimentum Parturient Ligula</h5>'><a href="{{asset('assets/img/offices/carolina/biuro_84.2.jpg')}}" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2"> <img src="{{asset('assets/img/offices/carolina/biuro_84.2.jpg')}}" alt="" /></a>
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




            <!--/.tab-pane -->
{{--            <div class="tab-pane fade" id="tab3-2">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h3 class="display-4 mb-5 text-end">Wirtualne biuro</h3>--}}
{{--                    <p class="mb-6">Wirtualne biuro na Mokotowie to doskonała opcja dla firm pragnących skorzystać z prestiżowego adresu w jednej z najbardziej pożądanych dzielnic Warszawy. Mokotów jest znany z doskonałej infrastruktury, bliskości do centrum miasta oraz licznych parków, co czyni go idealnym miejscem do prowadzenia działalności biznesowej.</p>--}}
{{--                    <!--/.row -->--}}
{{--                </div>--}}
{{--            </div>--}}
    </section>

@endsection

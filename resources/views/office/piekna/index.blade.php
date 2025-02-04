@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">Piękna 15</span>
                </h3>
            </div>
            <br>
        </div>

        <div class="container-fluid px-md-6">
            <div class="swiper-container blog grid-view" data-margin="30" data-nav="true" data-dots="false" data-items-xxl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/piekna/9.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/piekna/lobby.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/piekna/1.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/piekna/2.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/piekna/3.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs nav-tabs-basic mb-0 mt-4">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab3-1">Opis lokalizacji</a>
            </li>
        </ul>


        <div class="col-lg-12">
            <p class="mb-6">
                Oferujemy do wynajęcia przestronny i nowoczesny lokal biurowy o powierzchni 73 m²,
                zlokalizowany w jednej z najbardziej prestiżowych lokalizacji Warszawy – przy ulicy Pięknej
                15. To idealne miejsce dla firm, które cenią sobie elegancję, wygodę i dostęp do serca stolicy.
            </p>
        </div>

        <div class="card bg-light">
        <div class="col-lg-12">
            <h2>Lokalizacja</h2>
            <p class="mb-6">
                Ul. Piękna 15 znajduje się w ścisłym centrum miasta, w pobliżu Placu Konstytucji i Łazienek
                Królewskich. Okolica charakteryzuje się łatwym dostępem do komunikacji miejskiej
                (autobusy, tramwaje,
            </p>
        </div>

        <div class="container-fluid px-md-6 mt-4">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 d-block" style="height: 450px; border:0;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.0966308810794!2d21.01407949289197!3d52.22346218591455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471eccef88bab3c5%3A0x5df81d0d8966d459!2sPi%C4%99kna%2015%2C%2000-549%20Warszawa!5e0!3m2!1spl!2spl!4v1738706157911!5m2!1spl!2spl"
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
        </div>



        <div class="row gx-md-8 gx-xl-12 gy-10 mt-5 mb-3">
            <h2>Charakterystyka lokalizacji</h2>
            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Powierzchnia</h4>
                        <p class="mb-0">73 m² – optymalna przestrzeń dla małego lub średniego zespołu.</p>
                    </div>
                </div>
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Układ pomieszczeń</h4>
                        <p class="mb-0">funkcjonalny i elastyczny – możliwość aranżacji według potrzeb
                            najemcy (np. open space, biura indywidualne, sala konferencyjna).</p>
                    </div>
                </div>
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Wykończenie</h4>
                        <p class="mb-0">wysoki standard – lokal jest świeżo odnowiony, z eleganckimi
                            wykończeniami i nowoczesnym designem.</p>
                    </div>
                </div>
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Wyposażenie</h4>
                        <p class="mb-0">system klimatyzacji, szybki Internet, oświetlenie biurowe.</p>
                    </div>
                </div>
            </div>
            <!-- /column -->
        </div>
<hr>
        <!-- Dodaj margines do sekcji, aby oddzielić ją od kolejnych bloków -->
        <div class="row mt-7 mb-5">
            <!-- Pierwszy blok po lewej stronie -->
            <div class="col-lg-6">
                <h3 class="display-4 mb-7">Dodatkowe udogodnienia</h3>
                <div class="d-flex flex-row mb-6">
                    <div>
                        <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span class="number fs-18">1</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Reprezentacyjny budynek</h4>
                        <p class="mb-0">kamienica biurowa o wyjątkowym charakterze, z
                            eleganckim wejściem i recepcją.</p>
                    </div>
                </div>
                <div class="d-flex flex-row mb-6">
                    <div>
                        <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span class="number fs-18">2</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Dostępność miejsc parkingowych</h4>
                        <p class="mb-0">możliwość wynajęcia miejsca na parkingu
                            podziemnym lub pobliskim.</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span class="number fs-18">3</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Bezpieczeństwo:</h4>
                        <p class="mb-0">monitoring, ochrona budynku 24/7.</p>
                    </div>
                </div>
            </div>

            <!-- Drugi blok po prawej stronie z pionową linią -->
            <div class="col-lg-6 border-start">
                <h3 class="display-4 mb-7">Korzyści dla najemcy</h3>
                <div class="d-flex flex-row mb-6">
                    <div>
                        <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span class="number fs-18">1</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Prestiżowa lokalizacja</h4>
                        <p class="mb-0">podkreślająca profesjonalizm Twojej firmy.</p>
                    </div>
                </div>
                <div class="d-flex flex-row mb-6">
                    <div>
                        <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span class="number fs-18">2</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Bliskość kluczowych instytucji biznesowych</h4>
                        <p class="mb-0">urzędów i miejsc spotkań w centrum
                            Warszawy.</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span class="number fs-18">3</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Komfortowe warunki do pracy</h4>
                        <p class="mb-0">w przestrzeni biurowej o wysokim standardzie.</p>
                    </div>
                </div>
            </div>
        </div>




    </section>
@endsection


@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">Wilanów Herbu Janina 5 HJ5</span>
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
                                <img src="{{asset('assets/img/offices/hj1.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/hj2.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/hj3.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/hj4.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs nav-tabs-basic mb-0 mt-2">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab3-1">Gotowe biuro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="javascript:void(0);" tabindex="-1" aria-disabled="true">Wirtualne biuro</a>
            </li>
        </ul>

        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tab3-1">
                <div class="col-lg-12">
                    <h3 class="display-4 mb-5 text-end">Gotowe biuro</h3>
                    <p class="mb-6">
                        Lokalizacja położona na Błoniach Wilanowskich w Miasteczku Wilanów. Zapomnisz tutaj o zgiełku rozpędzonego miasta, a czas w biurze upłynie w spokojnej atmosferze.
                        Czeka na Ciebie  25 klimatyzowanych biur, które urzekają oryginalnym charakterem.
                        W okolicy znajdziesz wiele kawiarni i restauracji, które w przerwie od pracy serwują pyszny lunch.
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#virtualTourModal">
                Otwórz wirtualny spacer
            </button>
        </div>

        <div class="modal fade" id="virtualTourModal" tabindex="-1" aria-labelledby="virtualTourModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zamknij"></button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://vision360.pl/spacery/HJ5/start.html#pano5818/135.7/-0.2/90.0" class="w-100" style="height: 600px; border: none;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-md-6 mt-4">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 d-block" style="height: 450px; border:0;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.925659864882!2d21.042755516067466!3d52.19022397975312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecd358459b459%3A0x623876d7ca77603f!2sNobel%20-%20biura%20do%20wynaj%C4%99cia%2C%20coworking%2C%20wirtualne%20biuro!5e0!3m2!1spl!2spl!4v1607354256104!5m2!1spl!2spl"
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.35) !important; /* Lekkie przyciemnienie tła */
        }
    </style>
@endsection


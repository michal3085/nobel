@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">MOKOTÓW CAROLINA MEDICAL CENTER</span>
                </h3>
            </div>
            <br>
        </div>


        <ul class="nav nav-tabs nav-tabs-basic mb-0 mt-2">
            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab3-1">Gotowe biuro</a> </li>
            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab3-2">Wirtualne biuro</a> </li>
        </ul>
        <!-- /.nav-tabs -->
        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tab3-1">
                <div class="col-lg-12">
                    <h3 class="display-4 mb-5 text-end">Gotowe biuro</h3>
                    <p class="mb-6">
                        Biuro usytuowane w zacisznym i malowniczym zakątku Warszawy w pobliżu dzielnic: Wawer, Wilanów i Ursynów. Piękny widok z 12 pietra na zieloną część miasta oraz na warszawskie City ukoi Twoje zmysły. Serwisowane biura zlokalizowane w Multis Plaza to doskonała propozycja dla tych, którzy cenią pracę z dala od wielkomiejskiego szumu, jednocześnie pozostając w bliskim sąsiedztwie centrum miasta.
                        <br>
                        Na warszawskim Mokotowie czeka na Ciebie kilkanaście wyposażonych i gotowych do pracy gabinetów oraz sala konferencyjna. Miła obsługa odbierze Twoją korespondencję oraz przywita gości.
                        <br>
                        W tej lokalizacji gwarantujemy również Wirtualne Biura.

                    </p>
                    <!--/.row -->
                </div>
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab3-2">
                <div class="col-lg-12">
                    <h3 class="display-4 mb-5 text-end">Wirtualne biuro</h3>
                    <p class="mb-6">Wirtualne biuro na Mokotowie to doskonała opcja dla firm pragnących skorzystać z prestiżowego adresu w jednej z najbardziej pożądanych dzielnic Warszawy. Mokotów jest znany z doskonałej infrastruktury, bliskości do centrum miasta oraz licznych parków, co czyni go idealnym miejscem do prowadzenia działalności biznesowej.</p>
                    <!--/.row -->
                </div>
            </div>
            <!--/.tab-pane -->
        </div>
    </section>

@endsection

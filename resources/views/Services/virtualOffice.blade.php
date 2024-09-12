@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-5 pb-md-7"> <!-- Zmniejszono padding-bottom -->
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">WIRTUALNE BIURO</span>
                </h3>
            </div>
            <br>
            <p class="mb-4"><b>Wirtualne biuro to wygoda, a przede wszystkim redukcja kosztów związanych m.in. z wynajmem lokalu i zatrudnieniem pracowników biurowych do jego obsługi.</b>

            <section class="wrapper bg-light">
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 mb-md-10 align-items-center">
                    <div class="col-md-8 col-lg-6 position-relative">
                        <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
                        <figure class="rounded"><img src="./assets/img/services/wirtualne_biuro1.jpg" srcset="./assets/img/services/wirtualne_biuro1.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <h4 style="text-align: justify;">W ramach usługi odbierzemy Twoją korespondencję i na życzenie prześlemy skan. Przydzielimy numer telefonu stacjonarnego, odbierzemy połączenie lub przełączymy bezpośrednio do Ciebie,
                                a także obsłużymy spotkanie w salce konferencyjnej.</h4>
                            <p class="mb-4"><b>Zalety wirtualnego biura:</b></p>
                            <ul>
                                <li>Indywidualny/prywatny numer telefonu</li>
                                <li>Obsługa sekretarska: odbiór połączeń przychodzących oraz odbiór i przekazywanie korespondencji</li>
                                <li>Sale konferencyjne na spotkania biznesowe</li>
                                <li>Prestiżowy adres dla Twojej działalności</li>
                                <li>Prostokąty z lokalizacjami</li>
                            </ul>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->

                {{--    PRICE    --}}
                <div class="container pt-5 pb-5">
                    <p class="lead fs-lg"><span class="underline">Cennik</span></p>
                    <div class="col-lg-9">
                        <p> Doskonałym wyborem jest pozostawienie niezmienionego adresu rejestrowego siedziby spółki w tzw.
                            <a href="#" class="hover">Wirtualnym Biurze.</a></p>
                    </div>
                    <div class="table-responsive mt-2 mt-lg-0">
                        <table class="table table-borderless table-striped text-center">
                            <thead>
                            <tr>
                                <th class="w-25"></th>
                                <th>
                                    <div class="h4 mb-1">Cena</div>
                                    <div class="fs-15 fw-normal text-secondary">PLN</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="option text-start">Spółka bez VAT</td>
                                <td>1500</td>
                            </tr>
                            <tr>
                                <td class="option text-start">Spółka z VAT</td>
                                <td>3900</td>
                            </tr>
                            <tr>
                                <td class="option text-start">Konto bankowe dla gotowej spółki</td>
                                <td>1000</td>
                            </tr>
                            <tr>
                                <td class="option text-start">Opłata sądowa KRS</td>
                                <td>300 / 350</td>
                            </tr>
                            <tr>
                                <td class="option text-start">Doradztwo aktualizacje KRS</td>
                                <td>800</td>
                            </tr>
                            <tr>
                                <td class="option text-start">System S24 – nabycie</td>
                                <td>300 / 0</td>
                            </tr>
                            <tr>
                                <td class="option text-start">podatek PCC (0,5% - wartości na umowie)</td>
                                <td>ok. 80</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                {{--    /PRICE    --}}
            </section>
        </div>
    </section>
@endsection

@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-5 pb-md-7"> <!-- Zmniejszono padding-bottom -->
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">SHELF COMPANY- GOTOWA CZYSTA SPÓŁKA Z VAT LUB BEZ</span>
                </h3>
            </div>
            <br>

            {{--    VIDEO AND NUMBERS    --}}
            <section class="wrapper bg-light"> <!-- Usunięto nadmiarowy container -->
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 mb-md-10 align-items-center"> <!-- Zmniejszono marginesy -->
                    <div class="col-md-8 col-lg-6 position-relative">
                        <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
                        <figure class="rounded"><img src="./assets/img/photos/about10.jpg" srcset="./assets/img/photos/about10@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <p class="mb-4"><b>Zakup gotowej spółki to najlepsze rozwiązanie, jeśli chcesz szybko rozpocząć prowadzenie swojej
                                działalności!</b></p>

                        <!-- Nowy fragment tekstu -->
                        <div class="mb-4"> <!-- Zmniejszono marginesy -->
                            <h4>Co zyskujesz?</h4>
                            <ul>
                                <li>Start biznesu w dniu zakupu - od dnia zakupu spółki z aktywnym VAT wystawiasz faktury VAT i podpisujesz umowy w imieniu spółki.</li>
                                <li>Bezpieczeństwo - gotowa spółka bez historii nie prowadziła wcześniej działalności gospodarczej, przez co masz pewność, że nie jest zadłużona.</li>
                                <li>Gotowe dokumenty - otrzymujesz wszystkie numery rejestrowe niezbędne do rozpoczęcia działania tj.: KRS, NIP, REGON, aktywny rachunek bankowy lub EORI jeżeli tego wymagasz.</li>
                                <li>Oszczędność czasu - gotową spółkę otrzymasz za pośrednictwem notariusza lub systemu S24 tj. podpisem elektronicznym, bez wychodzenia z domu.</li>
                                <li>Gotowe konto bankowe* dla nabywanej spółki.</li>
                            </ul>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->

                {{--    PRICE    --}}
                <div class="container pt-5 pb-5"> <!-- Zmniejszono padding-top i padding-bottom -->
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

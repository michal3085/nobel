@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-15 pb-md-17">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15"><span class="underline-3 style-2 yellow">SHELF COMPANY- GOTOWA CZYSTA SPÓŁKA Z VAT LUB BEZ</span> </h3>
            </div>
            <br>
        {{--    VIDEO AND NUMBERS    --}}
            <div class="container pb-15 pb-md-17">
                    <section class="wrapper bg-light">
                        <div class="container">
                            <!-- /.row -->
                            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-9 mb-md-18 align-items-center">
                                <div class="col-md-8 col-lg-6 position-relative">
                                    <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
                                    <figure class="rounded"><img src="./assets/img/photos/about10.jpg" srcset="./assets/img/photos/about10@2x.jpg 2x" alt=""></figure>
                                </div>
                                <!--/column -->
                                <div class="col-lg-6">
                                    <p class="mb-6"><b>Zakup gotowej spółki to najlepsze rozwiązanie, jeśli chcesz szybko rozpocząć prowadzenie swojej
                                        działalności!</b></p>

                                    <!-- Nowy fragment tekstu -->
                                    <div class="mb-6">
                                        <h4>Co zyskujesz?</h4>
                                        <ul>
                                            <li>Start biznesu w dniu zakupu - od dnia zakupu spółki z aktywnym VAT wystawiasz faktury VAT i podpisujesz umowy w imieniu spółki.</li>
                                            <li>Bezpieczeństwo - gotowa spółka bez historii nie prowadziła wcześniej działalności gospodarczej, przez co masz pewność, że nie jest zadłużona.</li>
                                            <li>Gotowe dokumenty - otrzymujesz wszystkie numery rejestrowe niezbędne do rozpoczęcia działania tj.: KRS, NIP, REGON, aktywny rachunek bankowy lub EORI jeżeli tego wymagasz. Bardzo szerokie PKD, czyli przedmiot działalności umożliwiający działanie spółki w każdym zakresie.</li>
                                            <li>Oszczędność czasu - gotową spółkę otrzymasz za pośrednictwem notariusza lub systemu S24 tj. podpisem elektronicznym, czyli bez wychodzenia z domu, ograniczając czas przejęcia spółki do zera.</li>
                                            <li>Gotowe konto bankowe* dla nabywanej spółki.</li>
                                        </ul>
                                    </div>
                                    <!--/.row -->
                                </div>

                                <!--/column -->
                            </div>
                            <!--/.row -->

{{--                        PRICE    --}}
                            <div class="container pt-15 pt-md-17 pb-11 pb-md-12">
                                <h2 class="display-4 mb-3">Our Pricing</h2>
                                <p class="lead fs-lg">We offer <span class="underline">great prices</span>, premium and quality products for your business.</p>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p>Enjoy a <a href="#" class="hover">free 30-day trial</a> and experience the full service. No credit card required!</p>
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                                <a href="#" class="btn btn-primary rounded-pill mt-2">See All Prices</a>
                                <div class="table-responsive mt-10 mt-lg-0">
                                    <table class="table table-borderless table-striped text-center">
                                        <thead>
                                        <tr>
                                            <th class="w-25"></th>
                                            <th>
                                                <div class="h4 mb-1">Basic Plan</div>
                                                <div class="fs-15 fw-normal text-secondary">$9 / Monthly</div>
                                            </th>
                                            <th>
                                                <div class="h4 mb-1">Premium Plan</div>
                                                <div class="fs-15 fw-normal text-secondary">$19 / Monthly</div>
                                            </th>
                                            <th>
                                                <div class="h4 mb-1">Corporate Plan</div>
                                                <div class="fs-15 fw-normal text-secondary">$29 / Monthly</div>
                                            </th>
                                            <th>
                                                <div class="h4 mb-1">Business Plan</div>
                                                <div class="fs-15 fw-normal text-secondary">$49 / Monthly</div>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="option text-start">Project</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>20</td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td class="option text-start">API Access</td>
                                            <td>100K</td>
                                            <td>200K</td>
                                            <td>300K</td>
                                            <td>900K</td>
                                        </tr>
                                        <tr>
                                            <td class="option text-start">Storage</td>
                                            <td>100MB</td>
                                            <td>200MB</td>
                                            <td>500MB</td>
                                            <td>900MB</td>
                                        </tr>
                                        <tr>
                                            <td class="option text-start">Weekly Reports</td>
                                            <td>-</td>
                                            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="option text-start">24/7 Support</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                            <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th class="w-25"></th>
                                            <th><a href="#" class="btn btn-soft-primary rounded-pill mt-1">Choose Plan</a></th>
                                            <th><a href="#" class="btn btn-soft-primary rounded-pill mt-1">Choose Plan</a></th>
                                            <th><a href="#" class="btn btn-soft-primary rounded-pill mt-1">Choose Plan</a></th>
                                            <th><a href="#" class="btn btn-soft-primary rounded-pill mt-1">Choose Plan</a></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
{{--                        /PRICE    --}}

                            <!--/.Q&A -->
                            <div class="card bg-soft-primary rounded-4">
                                <div class="card-body p-md-10 p-xl-11">
                                    <div class="row gx-lg-8 gx-xl-12 gy-10">
                                        <div class="col-lg-6">
                                            <h3 class="display-4 mb-4">Frequently Asked Questions</h3>
                                            <p class="lead fs-lg mb-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
                                        </div>
                                        <!--/column -->
                                        <div class="col-lg-6">
                                            <div class="accordion accordion-wrapper" id="accordionExample">
                                                <div class="card plain accordion-item">
                                                    <div class="card-header" id="headingOne">
                                                        <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How do I get my subscription receipt?</button>
                                                    </div>
                                                    <!--/.card-header -->
                                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                                        </div>
                                                        <!--/.card-body -->
                                                    </div>
                                                    <!--/.accordion-collapse -->
                                                </div>
                                                <!--/.accordion-item -->
                                                <div class="card plain accordion-item">
                                                    <div class="card-header" id="headingTwo">
                                                        <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Are there any discounts for people in need?</button>
                                                    </div>
                                                    <!--/.card-header -->
                                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                                        </div>
                                                        <!--/.card-body -->
                                                    </div>
                                                    <!--/.accordion-collapse -->
                                                </div>
                                                <!--/.accordion-item -->
                                                <div class="card plain accordion-item">
                                                    <div class="card-header" id="headingThree">
                                                        <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do you offer a free trial edit?</button>
                                                    </div>
                                                    <!--/.card-header -->
                                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                                        </div>
                                                        <!--/.card-body -->
                                                    </div>
                                                    <!--/.accordion-collapse -->
                                                </div>
                                                <!--/.accordion-item -->
                                                <div class="card plain accordion-item">
                                                    <div class="card-header" id="headingFour">
                                                        <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How do I reset my Account password?</button>
                                                    </div>
                                                    <!--/.card-header -->
                                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                                        </div>
                                                        <!--/.card-body -->
                                                    </div>
                                                    <!--/.accordion-collapse -->
                                                </div>
                                                <!--/.accordion-item -->
                                            </div>
                                            <!--/.accordion -->
                                        </div>
                                        <!--/column -->
                                    </div>
                                    <!--/.row -->
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.card -->
                        </div>
                        <!-- /.container -->
                    </section>
                <!-- /column -->
            </div>
        </div>
        {{--    VIDEO AND NUMBERS END    --}}
        <!-- /.container -->
    </section>
    <!-- /section -->


@endsection

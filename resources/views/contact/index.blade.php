@extends('_layout')

@section('content')
    <section class="wrapper bg-light angled upper-end mt-5">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">Kontakt</span>
                </h3>
            </div>
            <br>
        </div>
        <div class="container pb-3 pb-md-7">
            <div class="row mb-14 mb-md-12">
                <div class="col-xl-12 mx-auto mt-n19">
                    <div class="row gx-4">
                        <!-- Card with Map and Address - First Card -->
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="row gx-0">
                                    <!-- Map - Left Column -->
                                    <div class="col-md-6">
                                        <div class="map map-full rounded-top rounded-lg-start">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.95533605081!2d21.00140507691321!3d52.226029257952234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecdabd7db4d6f%3A0x7f17e71bca661d25!2sTytusa%20Cha%C5%82ubi%C5%84skiego%208%2C%2000-613%20Warszawa!5e0!3m2!1spl!2spl!4v1739917280179!5m2!1spl!2spl" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <!-- Address and Contact Info - Right Column -->
                                    <div class="col-md-6 p-10 p-md-11 p-lg-14">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                            </div>
                                            <div class="align-self-start justify-content-start">
                                                <h5 class="mb-1">Nobel.pro sp. z o.o.</h5>
                                                <address>ul. Chałubińskiego 8 <br> 00-613 Warszawa <br class="d-none d-md-block" />NIP: 7010225520</address>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Telefon</h5>
                                                <p>+48 22 499 99 00</p>
                                            </div>
                                        </div>
{{--                                        <div class="d-flex flex-row">--}}
{{--                                            <div>--}}
{{--                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <h5 class="mb-1">Infolinia</h5>--}}
{{--                                                <p>+48 22 499 22 99</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">E-mail</h5>
                                                <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">nobel@nobel.pro</a></p>
                                            </div>
                                        </div>
                                            <br>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-university"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1" style="font-size: 15px;">Bank Millennium S.A.</h5>
                                                <p class="mb-0">IBAN: PL 77 1160 2202 0000 0001 5966 5298</p>
                                                <p class="mb-0">SWIFT: BIGBPLPW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card with Map and Address - Second Card -->
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="row gx-0">
                                    <!-- Map - Left Column -->
                                    <div class="col-md-6">
                                        <div class="map map-full rounded-top rounded-lg-start">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.6442036704766!2d21.00325317691355!3d52.23168165753545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc8c93a84a83%3A0xa2e1cc1f1b7198de!2sPa%C5%82ac%20Kultury%20i%20Nauki%2C%20plac%20Defilad%201%2C%2000-901%20Warszawa!5e0!3m2!1spl!2spl!4v1739917423055!5m2!1spl!2spl" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <!-- Address and Contact Info - Right Column -->
                                    <div class="col-md-6 p-10 p-md-11 p-lg-14">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                            </div>
                                            <div class="align-self-start justify-content-start">
                                                <h5 class="mb-1">Nobel sp. z o.o.</h5>
                                                <address>Plac Defilad 1 <br> 00-901 Warszawa
                                                    <br class="d-none d-md-block" />NIP: 5213150329</address>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Telefon</h5>
                                                <p>+48 22 499 99 00</p>
                                            </div>
                                        </div>
{{--                                        <div class="d-flex flex-row">--}}
{{--                                            <div>--}}
{{--                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <h5 class="mb-1">Infolinia</h5>--}}
{{--                                                <p>+48 22 499 22 99</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">E-mail</h5>
                                                <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">nobel@nobel.pro</a></p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-university"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1" style="font-size: 15px;">Bank Millennium S.A.</h5>
                                                <p class="mb-0">IBAN: PL 06 1160 2202 0000 0002 4444 8553</p>
                                                <p class="mb-0">SWIFT: BIGBPLPW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <div class="row mt-1">
                        <div class="col-12 text-center">
                            <h3>ROZPOCZNIJ COŚ NOWEGO<br><span class="display-5">SKONTAKTUJ SIĘ Z NAMI!</span></h3>
                            <p>Pozostawiając formalności w profesjonalnych rękach będziesz mógł zająć się rozwojem swojego biznesu.</p>
                        </div>
                    </div>
                    <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
                        <div class="messages"></div>
                        <div class="row gx-4">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                                    <label for="form_name">Imię *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your first name. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                                    <label for="form_lastname">Nazwisko *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your last name. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                                    <label for="form_email">Email *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please provide a valid email address. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-select-wrapper mb-4">
                                    <select class="form-select" id="form-select" name="department" required>
                                        <option selected disabled value="">Wybierz temat</option>
                                        <option value="Sales">Gotowe biuro</option>
                                        <option value="Marketing">Wirtualne biuro</option>
                                        <option value="Customer Support">Zmiany w KRS</option>
                                        <option value="Customer Support">Gotowa spółka</option>
                                        <option value="Customer Support">Rejestracja spółki</option>
                                    </select>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Wybierz temat </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-12">
                                <div class="form-floating mb-4">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                                    <label for="form_message">Wiadomość *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg w-100 w-md-auto">Wyślij wiadomość</button>
                            </div>
                            <!-- /column -->
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h3><span class="display-5">Nasze biura wirtualne</span></h3>
                </div>
            </div>

            <!-- First Office -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Warszawa - Centrum</h5>
                        <p class="card-text">ul. Chałubińskiego 8 <br> 00-613 Warszawa</p>
                        <p class="card-text">Tel: +48 22 456 19 10</p>
                        <p class="card-text">E-mail: <a href="mailto:biuro.p@nobel.pro">biuro.p@nobel.pro</a></p>
                        <p class="card-text" style="font-size: 14px;">XII Wydział Gospodarczy - Krajowy Rejestr Sądowy</p>
                        <p class="card-text" style="font-size: 14px;">Trzeci Urząd Skarbowy Warszawa-Śródmieście</p>
                    </div>
                </div>
            </div>

            <!-- Second Office -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Warszawa - Wola</h5>
                        <p class="card-text">ul. Pańska 96/83 <br> 00-837 Warszawa</p>
                        <p class="card-text">Tel: +48 22 432 08 10</p>
                        <p class="card-text">E-mail: <a href="mailto:biuro.p@nobel.pro">biuro.p@nobel.pro</a></p>
                        <p class="card-text" style="font-size: 14px;">XIII Wydział Gospodarczy - Krajowy Rejestr Sądowy</p>
                        <p class="card-text">Urząd Skarbowy Warszawa-Wola</p>
                    </div>
                </div>
            </div>

            <!-- Third Office -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Warszawa - Mokotów</h5>
                        <p class="card-text">ul. Pory 78 <br> 02-757 Warszawa</p>
                        <p class="card-text">Tel: +48 22 499 33 44</p>
                        <p class="card-text">E-mail: <a href="mailto:biuro.p@nobel.pro">biuro.p@nobel.pro</a></p>
                        <p class="card-text" style="font-size: 14px;">XIV Wydział Gospodarczy - Krajowy Rejestr Sądowy</p>
                        <p class="card-text">Urząd Skarbowy Warszawa-Mokotów</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

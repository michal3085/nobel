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
                <h3 class="display-3 mb-2 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">CENNIK</span>
                </h3>

                <div class="container pt-5 pb-5">
                    <div class="table-responsive mt-2 mt-lg-0">
                        <table class="table table-borderless table-striped text-center">
                            <thead>
                            <tr>
                                <th class="text-start">Pakiety</th>
                                <th>
                                    <div class="h4 mb-1 text-nowrap">ADRES OSOBISTY<br>
                                        (osoba fizyczna)
                                    </div>
                                    <div class="fs-15 fw-normal text-secondary">100</div>
                                </th>
                                <th>
                                    <div class="h4 mb-1 text-nowrap">PRESTIŻOWY ADRES<br>
                                        (firma)
                                    </div>
                                    <div class="fs-15 fw-normal text-secondary">200</div>
                                </th>
                                <th>
                                    <div class="h4 mb-1">PRESTIŻOWY ADRES PLUS <br>
                                        (firma)
                                    </div>
                                    <div class="fs-15 fw-normal text-secondary">400</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="option text-start">ADRES REJESTROWY</td>
                                <td>-</td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                            </tr>
                            <tr>
                                <td class="option text-start">ODBIERANIE KORESPONDENCJI oraz przesyłek kurierskich</td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                            </tr>
                            <tr>
                                <td class="option text-start">INFORMOWANIE MAILEM O ODEBRANYCH PRZESYŁAKCH</td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                            </tr>
                            <tr>
                                <td class="option text-start">SKANOWANIE</td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                            </tr>
                            <tr>
                                <td class="option text-start">NAZWA FIRMY W HOLU</td>
                                <td>-</td>
                                <td>-</td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                            </tr>
                            <tr>
                                <td class="option text-start">SALA KONFERENCYJNA</td>
                                <td>60 PLN / H</td>
                                <td>60 PLN / H</td>
                                <td>4H w miesiącu</td>
                            </tr>
                            <tr>
                                <td class="option text-start">INDYWIDUALNY NUMER TELEFONU</td>
                                <td>-</td>
                                <td>-</td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                            </tr>
                            <tr>
                                <td class="option text-start">WPISANIE ADRESU W KRS</td>
                                <td>-</td>
                                <td>250 PLN*</td>
                                <td>0 PLN* </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th class="w-25"></th>
                                <th><a class="btn btn-soft-primary rounded-pill mt-1" data-info="1" data-bs-toggle="modal" data-bs-target="#modal-virtual-office">Zapytaj</a></th>
                                <th><a class="btn btn-soft-primary rounded-pill mt-1" data-info="2" data-bs-toggle="modal" data-bs-target="#modal-virtual-office">Zapytaj</a></th>
                                <th><a class="btn btn-soft-primary rounded-pill mt-1" data-info="3" data-bs-toggle="modal" data-bs-target="#modal-virtual-office">Zapytaj</a></th>
                            </tr>
                            </tfoot>
                        </table>
                        * •	Cena nie zawiera opłaty sądowej.
                    </div>
                    <!-- /.table-responsive -->
                </div>
                {{--    /PRICE    --}}
            </section>
        </div>
    </section>

    {{--  OFFICES CARDS  --}}
        @include('Services.components.localsCards')
    {{--  /OFFICES CARDS  --}}

    @include('Services._modal')
    <script>
        document.querySelectorAll('[data-bs-toggle="modal"]').forEach(function(button) {
            button.addEventListener('click', function() {
                // Pobierz wartość data-info z klikniętego przycisku
                const info = this.getAttribute('data-info');

                // Pobierz element select
                const select = document.getElementById('nobel-vo-topic-id');

                // Ustaw wartość w zależności od data-info
                if (info === '1') {
                    select.value = "ADRES OSOBISTY";
                } else if (info === '2') {
                    select.value = "PRESTIŻOWY ADRES";
                } else if (info === '3') {
                    select.value = "PRESTIŻOWY ADRES PLUS";
                }
            });
        });

        $(document).ready(function() {
            var $spinner = $('.spinner-border'); // Pobierz spinner raz, aby nie szukać go wielokrotnie

            $('#nobel-submit-button').click(function (e) {
                e.preventDefault();

                // Pokaż spinner
                $spinner.removeClass('d-none');

                $('#nobel-virtual-office-form-id').find("input").removeClass('is-invalid');
                $('#nobel-virtual-office-form-id').find("select").removeClass('is-invalid');
                $('#nobel-virtual-office-form-id').find("textarea").removeClass('is-invalid');

                $.ajax({
                    url: "{{ route('service.send.mail') }}",
                    method: "POST",
                    dataType: 'json',
                    data: $('#nobel-virtual-office-form-id').serialize(),
                    success: function (data) {
                        // Ukryj spinner po zakończeniu
                        $spinner.addClass('d-none');

                        // Schowanie modala po sukcesie
                        $('#modal-virtual-office').modal('hide');
                        location.reload(); // Odśwież stronę
                    },
                    error: function (response) {
                        // Ukryj spinner w przypadku błędu
                        $spinner.addClass('d-none');

                        // Obsługa błędów walidacji
                        if(response.status === 422) {
                            var errors = response.responseJSON.errors;

                            // Dodanie klasy 'is-invalid' dla każdego błędnego pola
                            $.each(errors, function (key, value) {
                                var inputElement = $('[name="' + key + '"]');
                                inputElement.addClass('is-invalid');
                            });
                        }
                    }
                });
            });
        });
    </script>
@endsection

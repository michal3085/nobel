


<div class="pricing-wrapper position-relative mt-8">
    <h3 class="display-3 pe-xl-10 pe-xxl-15">
        <span class="underline-3 style-2 @if(isset($color)) {{ $color }} @else violet @endif">Cennik</span>
    </h3>
    <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
    <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
    <div class="row gy-6 mt-3 mt-md-5 justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="pricing card text-center">
                <div class="card-body">
                    <img src="{{asset('./assets/img/icons/lineal/briefcase-2.svg')}}" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                    <h4 class="card-title">Adres do korespondencji</h4>
                    Osoba Fizyczna
                    <div class="prices text-dark">
                        <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">100</span> <span class="price-duration">mc</span></div>
                        <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                    </div>
                    <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                        <li class="text-muted"><i class="uil uil-times bullet-soft-red"></i><span style="font-size: 15px;">Adres rejestrowy</span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Adres do korespondencji</span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Odbieranie korespondencji oraz przesyłek kurierskich </span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Informowanie mailem o odebranych przesyłkach</span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Skanowanie </span></li>
                        <li class="text-muted"><i class="uil uil-times bullet-soft-red"></i><span style="font-size: 15px;">e-Doręczenia</span></li>
                        <li class="text-muted"><i class="uil uil-times bullet-soft-red"></i><span style="font-size: 15px;"> Nazwa firmy w holu </span></li>
                        <li class="text-muted"><i class="uil uil-times bullet-soft-red"></i><span style="font-size: 15px;"> Sala konferencyjna 60 zł/h</span></li>
                        <li class="text-muted"><i class="uil uil-times bullet-soft-red"></i><span style="font-size: 15px;"> Indywidualny numer telefonu</span></li>
                        {{--                        <li><i class="uil uil-times bullet-soft-red"></i><span style="font-size: 13px;"><strong> Zmiana adresu w KRS </strong></span></li>--}}
                        {{--                        <li><i class="uil uil-times bullet-soft-red"></i><span style="font-size: 13px;"><strong> Wszystkie zmiany w KRS </strong></span></li>--}}
                    </ul>
                    <a class="btn btn-soft-primary rounded-pill mt-1" data-info="1"
                       data-bs-toggle="modal" data-bs-target="#modal-virtual-office">Zamów pakiet</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 popular">
            <div class="pricing card text-center">
                <div class="ribbon-rounded">
                    Zmiana<br>adresu w<br>KRS gratis
                    <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" alt="ikona prezentu">
                </div>
                <div class="card-body">
                    <img src="{{asset('./assets/img/icons/lineal/home.svg')}}" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                    <h4 class="card-title">Prestiżowy adres </h4>
                    Firma
                    <div class="prices text-dark">
                        <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">200</span> <span class="price-duration">mc</span></div>
                        <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">199</span> <span class="price-duration">yr</span></div>
                    </div>
                    <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Adres rejestrowy</span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Adres do korespondencji </span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Odbieranie korespondencji oraz przesyłek kurierskich </span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Informowanie mailem o odebranych przesyłkach</span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Skanowanie </span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">e-Doręczenia </span></li>
                        <li><i class="uil uil-times bullet-soft-red"></i><span style="font-size: 15px;"> Nazwa firmy w holu</span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;"> Sala konferencyjna <strong>60 zł/h</strong></span></li>
                        <li><i class="uil uil-times bullet-soft-red"></i><span style="font-size: 15px;">Indywidualny numer telefonu </span></li>
                        {{--                        <li><i class="uil uil-times bullet-soft-red"></i><span style="font-size: 13px;"><strong> Zmiana adresu w KRS </strong></span></li>--}}
                        {{--                        <li><i class="uil uil-check"></i><span style="font-size: 13px;"><strong> Wszystkie zmiany w KRS </strong>- 0 PLN<sup>*</sup></span></li>--}}
                    </ul>
                    <a class="btn btn-soft-primary rounded-pill mt-1" data-info="2"
                       data-bs-toggle="modal" data-bs-target="#modal-virtual-office">Zamów pakiet</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="pricing card text-center">
                <div class="ribbon-rounded">
                    Zmiana<br>adresu w<br>KRS gratis
                    <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" alt="ikona prezentu">
                </div>
                <div class="card-body">
                    <img src="{{asset('./assets/img/icons/lineal/briefcase-2.svg')}}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                    <h4 class="card-title">Wirtualne biuro</h4>
                    Firma
                    <div class="prices text-dark">
                        <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">370</span> <span class="price-duration">mc</span></div>
                        <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                    </div>
                    <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Adres rejestrowy</span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Adres do korespondencji </span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Odbieranie korespondencji oraz przesyłek kurierskich </span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Informowanie mailem o odebranych przesyłkach</span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Skanowanie </span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">e-Doręczenia</span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Nazwa firmy w holu </span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Sala konferencyjna<strong> 4 h/mc</strong></span></li>
                        <li><i class="uil uil-check"></i><span style="font-size: 15px;">Indywidualny numer telefonu</span></li>
                        {{--                        <li><i class="uil uil-check"></i><span style="font-size: 13px;"><strong> Zmiana adresu w KRS </strong>- 0 PLN<sup>*</sup></span></li>--}}
                        {{--                        <li><i class="uil uil-check"></i><span style="font-size: 13px;"><strong> Wszystkie zmiany w KRS </strong> - 0 PLN <sup>**</sup></span></li>--}}
                    </ul>
                    <a class="btn btn-soft-primary rounded-pill mt-1" data-info="4"
                       data-bs-toggle="modal" data-bs-target="#modal-virtual-office">Zamów pakiet</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 mb-12 mt-10" data-image-src="{{asset('/assets/img/photos/bg-bw.jpg')}}">
    <div class="card-body p-10 p-xl-12">
        <div class="row text-center">
            <div class="col-xl-11 col-xxl-9 mx-auto">
                <h3 class="display-1 mb-8 px-lg-8 text-white" style="font-size: 25px;">
                    Oferujemy pełen zakres usług związanych ze zmianami w KRS w systemach PRS i S24.<br> Nasze wsparcie obejmuje przygotowanie uchwał, umów zbycia udziałów/akcji oraz dopilnowanie ostatecznej aktualizacji wpisów w KRS.
                </h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!--/.card-body -->
</div>

@include('Services.modal._modal')
<script>
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(function (button) {
        button.addEventListener('click', function () {
            // Pobierz wartość data-info z klikniętego przycisku
            const info = this.getAttribute('data-info');

            // Pobierz element select
            const select = document.getElementById('nobel-vo-topic-id');

            // Ustaw wartość w zależności od data-info
            if (info === '1') {
                select.value = "ADRES DO KORESPONDENCJI";
            } else if (info === '2') {
                select.value = "PRESTIŻOWY ADRES";
            } else if (info === '3') {
                select.value = "PRESTIŻOWY ADRES PLUS";
            } else if (info === '4') {
                select.value = "WIRTUALNE BIURO";
            }
        });
    });

    $(document).ready(function () {
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
                    if (response.status === 422) {
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

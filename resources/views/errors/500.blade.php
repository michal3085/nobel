@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <!-- /.nav-tabs -->
        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tab3-1">
                <div class="text-center">
                    <h1 class="display-1 fw-bold text-danger">500</h1>
                    <h2 class="mb-4">Wewnętrzny błąd serwera</h2>
                    <p class="mb-5">Wystąpił nieoczekiwany problem. Spróbuj ponownie później lub skontaktuj się z administratorem.</p>
                    <a class="btn btn-primary rounded-pill" href="{{ route('main') }}">Powrót do strony głównej</a>
                </div>
                <!--/.tab-pane -->
            </div>
        </div>
    </section>
@endsection

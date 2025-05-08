@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <!-- /.nav-tabs -->
        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tab3-1">
                <div class="col-lg-12">
                    <div class="text-center">
                        @if(isset($exception) && $exception->getStatusCode() == 419)
                            <h1 class="display-1 fw-bold text-warning">419</h1>
                            <h2 class="mb-4">Strona wygasła</h2>
                            <p class="mb-5">Twoja sesja wygasła. Odśwież stronę i spróbuj ponownie.</p>
                        @else
                            <h1 class="display-1 fw-bold text-danger">404</h1>
                            <h2 class="mb-4">Ups! Strona nie została znaleziona</h2>
                            <p class="mb-5">Niestety, strona której szukasz nie istnieje lub została przeniesiona.</p>
                        @endif
                        <a class="btn btn-primary rounded-pill" href="{{ route('main') }}">Powrót do strony głównej</a>
                    </div>
                </div>
                <!--/.tab-pane -->
            </div>
        </div>
    </section>
@endsection

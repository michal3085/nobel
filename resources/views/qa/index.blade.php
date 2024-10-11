@extends('_layout')

@section('content')
    <section id="snippet-3" class="wrapper bg-light wrapper-border">
        <div class="container">
            <h2 class="display-4 mb-3 text-center">Q&A</h2>
            <p class="lead text-center mb-10 px-md-16 px-lg-0">Jeśli nie widzisz odpowiedzi na swoje pytanie, możesz wysłać do nas wiadomość e-mail za pośrednictwem naszego formularza kontaktowego.</p>

            @include('qa.sections.readyCompany')
            @include('qa.sections.virtualOffice')
            @include('qa.sections.companyRegistration')

        </div>
    </section>
@endsection

<h5 class="display-6 mb-3 text-center">{{ $title ?? '- FAQ -' }}</h5>
<div class="row">
    {{-- Lewa kolumna --}}
    <div class="col-lg-6 mb-0">
        <div id="accordion-{{ $section }}-1" class="accordion-wrapper">
            @foreach($leftFaqs as $index => $faq)
                <div class="card accordion-item">
                    <div class="card-header" id="accordion-heading-{{ $section }}-{{ $index }}-1">
                        <button class="collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordion-collapse-{{ $section }}-{{ $index }}-1"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-{{ $section }}-{{ $index }}-1">
                            {{ $faq->qa_title }}
                        </button>
                    </div>
                    <div id="accordion-collapse-{{ $section }}-{{ $index }}-1"
                         class="collapse"
                         aria-labelledby="accordion-heading-{{ $section }}-{{ $index }}-1">
                        <div class="card-body">
                            <p>{{ $faq->qa_text }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Prawa kolumna --}}
    <div class="col-lg-6">
        <div id="accordion-{{ $section }}-2" class="accordion-wrapper">
            @foreach($rightFaqs as $index => $faq)
                <div class="card accordion-item">
                    <div class="card-header" id="accordion-heading-{{ $section }}-{{ $index }}-2">
                        <button class="collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordion-collapse-{{ $section }}-{{ $index }}-2"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-{{ $section }}-{{ $index }}-2">
                            {{ $faq->qa_title }}
                        </button>
                    </div>
                    <div id="accordion-collapse-{{ $section }}-{{ $index }}-2"
                         class="collapse"
                         aria-labelledby="accordion-heading-{{ $section }}-{{ $index }}-2">
                        <div class="card-body">
                            <p>{{ $faq->qa_text }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<br><br>

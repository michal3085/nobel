<div class="container pt-5 mt-n10 mb-n1">
    <div class="row">
        <div class="col-12">
            <a
                href="{{ $mainMenu === 'virtualOffices'
                        ? route('service.route.dispatch', ['service' => 'wirtualne-biuro'])
                        : route('service.route.dispatch', ['service' => 'gotowe-biura']) }}"
                class="btn btn-sm btn-soft-{{ $color }} rounded-pill mb-1"
            >
                <i class="uil uil-arrow-left me-1"></i>
                <span class="d-none d-sm-inline">@if ($mainMenu === 'virtualOffices') Wirtualne Biuro @else Gotowe Biura @endif</span>
            </a>
        </div>
    </div>
</div>

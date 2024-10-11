@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">Wilanów Klimczaka 15</span>
                </h3>
            </div>
            <br>
        </div>

        <ul class="nav nav-tabs nav-tabs-basic mb-0 mt-2">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab3-1">Gotowe biuro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="javascript:void(0);" tabindex="-1" aria-disabled="true">Wirtualne biuro</a>
            </li>
        </ul>
        <!-- /.nav-tabs -->
        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tab3-1">
                <div class="col-lg-12">
                    <h3 class="display-4 mb-5 text-end">Gotowe biuro i Coworking</h3>
                    <p class="mb-6">
                        Lokalizacja położona  w samym sercu Miasteczka Wilanów u zbiegu alei Rzeczypospolitej i Klimczaka. W przestrzeni oprócz gotowych do pracy gabinetów znajdziesz także przestrzeń coworkingową, którą możesz dzielić ze znajomymi sąsiadami z osiedla.
                        Wynajem dedykowanego biurka w większej przestrzeni jest idealnym rozwiązaniem dla osób i firm poszukujących taniego, ale elastycznego i inspirującego miejsca do pracy w pobliżu miejsca zamieszkania.
                        Ponadto, coworking w Wilanowie to również świetna okazja do nawiązywania wartościowych kontaktów biznesowych i współpracy z innymi profesjonalistami.
                    </p>
                    <!--/.row -->
                </div>
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab3-2">
                <div class="col-lg-12">
                    <h3 class="display-4 mb-5 text-end">Wirtualne biuro</h3>
                    <p class="mb-6">

                    </p>
                    <!--/.row -->
                </div>
            </div>
            <!--/.tab-pane -->
        </div>
    </section>

@endsection

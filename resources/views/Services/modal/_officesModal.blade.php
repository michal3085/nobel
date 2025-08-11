<div class="modal fade" id="modal-offices" tabindex="-1">
    <form method="POST" id="modal-offices-form-id">
        @csrf
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 class="mb-3 text-start">{{ _getOfficeTitle($mainMenu) }} - skontaktuj się z nami</h2>
                    <p class="lead mb-6 text-start">Wypełnij i wyślij formularz</p>

                    <input type="hidden" name="formType" value="@if ($mainMenu === 'virtualOffices') virtualOffice @else readyOffice @endif">

                    <div class="form-floating mb-4">
                        <select class="form-control" name="office_topic" id="nobel-office-topic-id">
                            <option value="ŚRÓDMIEŚCIE CHAŁBIŃSKIEGO 8">ŚRÓDMIEŚCIE CHAŁBIŃSKIEGO 8</option>
                            <option value="ŚRÓDMIEŚCIE PIĘKNA 15">ŚRÓDMIEŚCIE PIĘKNA 15</option>
                            <option value="PAŃSKA 96 WOLA">PAŃSKA 96 WOLA</option>
                            <option value="MOKOTÓW PORY 78">MOKOTÓW PORY 78</option>
                            <option value="HERBU JANINA 5 WILANÓW">HERBU JANINA 5 WILANÓW</option>
                            <option value="KLIMCZAKA 15 WILANÓW">KLIMCZAKA 15 WILANÓW</option>
                            <option value="KLIMCZAKA 15 WILANÓW COWORKING">KLIMCZAKA 15 WILANÓW COWORKING</option>
                            <option value="SOKOLSKA 30 KATOWICE">SOKOLSKA 30 KATOWICE</option>
                        </select>
                        <label for="nobel-office-topic-id">Temat</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input class="form-control" name="office_contact" id="nobel-office-contact-input">
                        <label for="nobel-office-contact-input">e-mail / nr telefonu</label>
                    </div>

                    <div class="form-floating mb-4">
                        <textarea class="form-control" name="office_message" id="nobel-office-text-area" style="height: 200px;"></textarea>
                        <label for="nobel-office-text-area">Wiadomość</label>
                    </div>

                    <button type="submit" class="btn btn-primary rounded-pill w-100 mb-2" id="nobel-office-submit-button">
                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
                        Wyślij
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- CSRF token do <head> -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.nobel-contact-button');
        const select = document.getElementById('nobel-office-topic-id');
        const $form = $('#modal-offices-form-id');
        const $spinner = $('.spinner-border');

        // Ustawienie CSRF tokena dla AJAX
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });

        // Przypisz temat do selecta z buttona
        buttons.forEach(button => {
            button.addEventListener('click', function () {
                const office = this.dataset.office;
                if (select && office) {
                    select.value = office;
                }
            });
        });

        // Obsługa wysyłki
        $('#nobel-office-submit-button').click(function (e) {
            e.preventDefault();

            // Pokaż spinner
            $spinner.removeClass('d-none');

            // Wyczyść walidację
            $form.find("input, select, textarea").removeClass('is-invalid');

            $.ajax({
                url: "{{ route('office.send.mail') }}",
                method: "POST",
                dataType: 'json',
                data: $form.serialize(),
                success: function (data) {
                    $spinner.addClass('d-none');
                    $('#modal-offices').modal('hide');
                    location.reload();
                },
                error: function (response) {
                    $spinner.addClass('d-none');

                    if (response.status === 422) {
                        var errors = response.responseJSON.errors;

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

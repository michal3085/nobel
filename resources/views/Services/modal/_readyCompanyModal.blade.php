<div class="modal fade" id="modal-ready-company" tabindex="-1">
    <form method="POST" id="modal-ready-company-form-id">
        @csrf
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 class="mb-3 text-start">Gotowa spółka</h2>
                    <p class="lead mb-6 text-start">Wypełnij i wyślij formularz</p>

                    <input type="hidden" name="formType" value="@if ($mainMenu === 'virtualOffices') virtualOffice @else readyOffice @endif">

                    <div class="form-floating mb-4">
                        <select class="form-control" name="rc_topic" id="nobel-office-topic-id">
                            <option value="Gotowa spółka bez VAT">Gotowa spółka bez VAT</option>
                            <option value="Gotowa spółka z VAT/VAT UE">Gotowa spółka z VAT/VAT UE</option>
                            <option value="Gotowa Spółka z adresem">Gotowa Spółka z adresem</option>
                        </select>
                        <label for="nobel-office-topic-id">Temat</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input class="form-control" name="rc_contact" id="nobel-ready-company-contact-input">
                        <label for="nobel-ready-company-input">e-mail / nr telefonu</label>
                    </div>

                    <div class="form-floating mb-4">
                        <textarea class="form-control" name="rc_message" id="nobel-ready-company-text-area" style="height: 200px;"></textarea>
                        <label for="nobel-ready-company-text-area">Wiadomość</label>
                    </div>

                    <button type="submit" class="btn btn-primary rounded-pill w-100 mb-2" id="nobel-ready-company-submit-button">
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
        const $form = $('#modal-ready-company-form-id');
        const $spinner = $('#nobel-ready-company-submit-button .spinner-border');
        const $submitBtn = $('#nobel-ready-company-submit-button');

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

        // Obsługa wysyłki formularza
        $form.on('submit', function (e) {
            e.preventDefault();

            // Pokaż spinner
            $spinner.removeClass('d-none');
            $submitBtn.prop('disabled', true);

            // Wyczyść walidację
            $form.find("input, select, textarea").removeClass('is-invalid');

            $.ajax({
                url: "{{ route('readyCompany.send.mail') }}",
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
                    $submitBtn.prop('disabled', false);

                    if (response.status === 422) {
                        var errors = response.responseJSON.errors;

                        $.each(errors, function (key, value) {
                            var inputElement = $('[name="' + key + '"]');
                            inputElement.addClass('is-invalid');
                            // Dodaj komunikat błędu
                            inputElement.after('<div class="invalid-feedback">' + value[0] + '</div>');
                        });
                    } else {
                        alert('Wystąpił błąd podczas wysyłania formularza.');
                    }
                }
            });
        });
    });
</script>

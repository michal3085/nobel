<div class="modal fade" id="modal-offices" tabindex="-1">
    <form method="POST" id="modal-offices-form-id">
        @csrf
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 class="mb-3 text-start">Wirtualne biuro - skontaktuj się z nami</h2>
                    <p class="lead mb-6 text-start">Wypełnij i wyślij formularz</p>

                    <div class="form-floating mb-4">
                        <select class="form-control" name="office_topic" id="nobel-office-topic-id">
                            <option value="ŚRÓDMIEŚCIE CHAŁBIŃSKIEGO 8">ŚRÓDMIEŚCIE CHAŁBIŃSKIEGO 8</option>
                            <option value="ŚRÓDMIEŚCIE PIĘKNA 15">ŚRÓDMIEŚCIE PIĘKNA 15</option>
                            <option value="PAŃSKA 96 WOLA">ŚRÓDMIEŚCIE PIĘKNA 15</option>
                            <option value="MOKOTÓW PORY 78">MOKOTÓW PORY 78</option>
                            <option value="HERBU JANINA 5 WILANÓW">HERBU JANINA 5 WILANÓW</option>
                            <option value="KLIMCZAKA 15 WILANÓW">KLIMCZAKA 15 WILANÓW</option>
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

                    <button type="submit" class="btn btn-primary rounded-pill w-100 mb-2" id="nobel-submit-button">
                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
                        Wyślij
                    </button>
                </div>
                <!--/.modal-content -->
            </div>
            <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.nobel-contact-button');
        const select = document.getElementById('nobel-office-topic-id');

        buttons.forEach(button => {
            button.addEventListener('click', function () {
                const office = this.dataset.office;
                if (select && office) {
                    select.value = office;
                }
            });
        });
    });
</script>

<div class="modal fade" id="modal-krs" tabindex="-1">
    <form method="POST" id="nobel-krs-form-id">
        @csrf
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 class="mb-3 text-start">Zmiany w KRS - wyceń przeprowadzenie zmian</h2>
                    <p class="lead mb-6 text-start">Wypełnij i wyślij formularz</p>

                    <div class="form-floating mb-4">
                        <input class="form-control" name="krs_name" id="nobel-vo-contact-input">
                        <label for="nobel-vo-contact-input">Nazwa</label>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-4">
                                <input class="form-control nobel-nip-mask" name="krs_nip" id="nobel-vo-contact-input">
                                <label for="nobel-vo-contact-input">NIP</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-4">
                                <input class="form-control nobel-krs-mask" name="krs_number" id="nobel-vo-contact-input">
                                <label for="nobel-vo-contact-input">KRS</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-4">
                        <textarea class="form-control" name="krs_description" id="nobel-vo-text-area" style="height: 200px;"></textarea>
                        <label for="nobel-vo-text-area">Opis zmiany</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input class="form-control" name="krs_mail" id="nobel-vo-contact-input">
                        <label for="nobel-vo-contact-input">e-mail</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input class="form-control nobel-phone-mask" name="krs_phone" id="nobel-vo-contact-input">
                        <label for="nobel-vo-contact-input">nr telefonu</label>
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
<!--/.modal -->
<script src="/assets/js/project.js"></script>

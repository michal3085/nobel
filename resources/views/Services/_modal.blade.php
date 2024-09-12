
    <div class="modal fade" id="modal-virtual-office" tabindex="-1">
        <form method="POST" id="nobel-virtual-office-form-id">
            @csrf
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h2 class="mb-3 text-start">Wirtualne biuro - skontaktuj się z nami</h2>
                        <p class="lead mb-6 text-start">Wypełnij i wyślij formularz</p>
                            <div class="form-floating mb-4">
                                <select class="form-control" name="vo_topic" id="nobel-vo-topic-id">
                                    <option value="ADRES OSOBISTY">ADRES OSOBISTY</option>
                                    <option value="PRESTIŻOWY ADRES">PRESTIŻOWY ADRES</option>
                                    <option value="PRESTIŻOWY ADRES PLUS">PRESTIŻOWY ADRES PLUS</option>
                                </select>
                                <label for="nobel-vo-topic-id">Temat</label>
                            </div>
                        <div class="form-floating mb-4">
                            <input class="form-control" name="vo_contact" id="nobel-vo-contact-input">
                            <label for="nobel-vo-contact-input">e-mail / nr telefonu</label>
                        </div>
                            <div class="form-floating mb-4">
                                <textarea class="form-control" name="vo_message" id="nobel-vo-text-area" style="height: 200px;"></textarea>
                                <label for="nobel-vo-text-area">Wiadomość</label>
                            </div>
                            <a class="btn btn-primary rounded-pill btn-login w-100 mb-2" id="nobel-submit-button">Wyślij</a>
                        <!-- /form -->
                    </div>
                    <!--/.modal-content -->
                </div>
                <!--/.modal-body -->
            </div>
        <!--/.modal-dialog -->
        </form>
    </div>
    <!--/.modal -->


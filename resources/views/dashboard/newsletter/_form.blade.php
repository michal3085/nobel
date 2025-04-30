
<div class="row mb-2">
    <div class="col-lg-12">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Tytuł</label>
            <div class="col-12">
                <input class="form-control form-control-sm @error('post_title') is-invalid @enderror" type="text" name="newsletter_subject" value="{{old('newsletter_subject', $formObject->newsletter_subject)}}">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Status</label>
            <div class="col-12">
                <select class="form-select" name="newsletter_active">
                    <option value="true">Aktywny</option>
                    <option value="false">Nieaktywny</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row mb-2">
    <div class="col-lg-12">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Treść newslettera</label>
            <div class="col-12">
                <textarea class="form-control @error('newsletter_body') is-invalid @enderror" name="newsletter_body" id="summernote">{{ old('newsletter_body', $formObject->newsletter_body) }}</textarea>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 500
        });
    });
</script>


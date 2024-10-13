<div class="row">
    <div class="col-lg-6">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Nazwa szablonu</label>
            <div class="col-12">
                <input class="form-control form-control-sm @error('nl_template_name') is-invalid @enderror" type="text" name="nl_template_name" value="{{old('nl_template_name', $formObject->nl_template_name)}}">
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Nazwa szablonu</label>
            <div class="col-12">
                <input class="form-control form-control-sm @error('nl_template_name') is-invalid @enderror" type="text" name="nl_template_name" value="{{old('nl_template_name', $formObject->nl_template_name)}}">
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-lg-12">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Treść maila</label>
            <div class="col-12">
                <textarea class="form-control @error('nl_text') is-invalid @enderror" name="nl_text" id="summernote">{{ old('nl_text', $formObject->nl_text) }}</textarea>
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


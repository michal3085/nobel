<div class="row mb-2">
    <div class="row mb-2">
        <label class="col-1 col-form-label col-form-label-sm">Treść maila</label>
        <div class="col-md-11">
            <textarea class="form-control @error('nl_text') is-invalid @enderror" name="nl_text" id="summernote">{{ old('nl_text', $formObject->nl_text) }}</textarea>
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


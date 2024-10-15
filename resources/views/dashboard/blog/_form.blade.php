
<div class="row mb-2">
    <div class="col-lg-12">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Tytuł</label>
            <div class="col-12">
                <input class="form-control form-control-sm @error('post_title') is-invalid @enderror" type="text" name="post_title" value="{{old('post_title', $formObject->post_title)}}">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Status</label>
            <div class="col-12">
                <select class="form-select" name="post_active">
                    <option value="true">Aktywny</option>
                    <option value="false">Nieaktywny</option>
                </select>
            </div>
        </div>
    </div>
    @if ($update === false)
        <div class="col-lg-6">
            <div class="row mb-2">
                <label class="col-12 col-form-label col-form-label-sm">Miniaturka</label>
                <div class="col-12">
                    <input class="form-control form-control-sm @error('post_image') is-invalid @enderror" type="file" name="post_image" value="{{old('post_image', $formObject->getPostImage())}}">
                </div>
            </div>
        </div>
    @endif
</div>
<div class="row mb-2">
    <div class="col-lg-12">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Treść maila</label>
            <div class="col-12">
                <textarea class="form-control @error('post_text') is-invalid @enderror" name="post_text" id="summernote">{{ old('post_text', $formObject->post_text) }}</textarea>
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


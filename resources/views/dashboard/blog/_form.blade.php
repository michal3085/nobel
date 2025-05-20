<div class="row mb-2">
    <div class="col-lg-12">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Tytuł</label>
            <div class="col-12">
                <input class="form-control form-control-sm @error('post_title') is-invalid @enderror" type="text" name="post_title" value="{{ old('post_title', $formObject->post_title) }}">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Status</label>
            <div class="col-12">
                <select class="form-select" name="post_active">
                    <option value="true" @if(old('post_active', $formObject->post_active) === 'true') selected @endif>Aktywny</option>
                    <option value="false" @if(old('post_active', $formObject->post_active) === 'false') selected @endif>Nieaktywny</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row align-items-center mb-4">
    <div class="col-lg-6">
        <label class="form-label small fw-semibold d-block mb-2">Miniaturka</label>

        {{-- Obrazek miniaturki: --}}
        <img
            id="thumbnailPreview"
            src="{{ $formObject->post_image ? $formObject->getPostImage() : '' }}"
            alt="Miniaturka"
            class="img-thumbnail rounded"
            style="max-height: 150px; width: auto; {{ $formObject->post_image ? '' : 'display:none;' }}"
        >

        {{-- Minimalny placeholder gdy brak obrazka, ukryty: --}}
        <p id="noThumbnail" class="text-muted small mb-0" style="{{ $formObject->post_image ? 'display:none;' : '' }}">
            Brak obecnej miniaturki
        </p>
    </div>

    <div class="col-lg-6">
        <label for="post_image" class="form-label small fw-semibold d-block mb-2">Załaduj nową miniaturkę</label>
        <input
            type="file"
            id="post_image"
            name="post_image"
            class="form-control form-control-sm @error('post_image') is-invalid @enderror"
            accept="image/*"
        >
        @if ($update === true)
            <small class="text-muted d-block mt-1">Zostaw puste, aby zachować obecny obrazek</small>
        @endif
    </div>
</div>

<div class="row mb-2">
    <div class="col-lg-12">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Treść posta</label>
            <div class="col-12">
                <textarea class="form-control @error('post_text') is-invalid @enderror" name="post_text" id="summernote">{{ old('post_text', $formObject->post_text) }}</textarea>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('post_image').onchange = e => {
        const preview = document.getElementById('thumbnailPreview');
        const noThumb = document.getElementById('noThumbnail');
        if (!e.target.files[0]) {
            preview.style.display = 'none';
            noThumb.style.display = 'block';
            preview.src = '';
            return;
        }
        preview.src = URL.createObjectURL(e.target.files[0]);
        preview.style.display = 'inline-block';
        noThumb.style.display = 'none';
    }
</script>

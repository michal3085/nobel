
<div class="row mb-2">
    <div class="col-lg-12">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Tytuł</label>
            <div class="col-12">
                <input class="form-control form-control-sm @error('qa_title') is-invalid @enderror"
                       type="text"
                       name="qa_title"
                       id="qa_title"
                       value="{{ old('qa_title', $formObject->qa_title) }}">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Sekcja</label>
            <div class="col-12">
                <select class="form-select" name="qa_section_id">
                    @foreach($sections as $section)
                        <option value="{{ $section->qa_section_id }}" @if(old('qa_title', $formObject->qa_section_id) === $section->qa_section_id) selected @endif>
                            {{ $section->qa_section_name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row mb-2">
            <label class="col-12 col-form-label col-form-label-sm">Status</label>
            <div class="col-12">
                <select class="form-select" name="qa_active">
                    <option value="1" @if(old('qa_active', $formObject->qa_active) === 1) selected @endif>Aktywny</option>
                    <option value="0" @if(old('qa_active', $formObject->qa_active) === 0) selected @endif>Nieaktywny</option>
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
                <textarea class="form-control @error('qa_text') is-invalid @enderror"
                          name="qa_text"
                          id="summernote">{{ old('qa_text', $formObject->qa_text) }}</textarea>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        const previewTitle = document.getElementById('preview-title');
        const previewContent = document.getElementById('preview-content');
        const titleInput = document.getElementById('qa_title');

        // Aktualizacja podglądu tytułu
        titleInput.addEventListener('input', () => {
            previewTitle.textContent = titleInput.value.trim() || 'Brak tytułu';
        });

        // Inicjalizacja TinyMCE z obsługą podglądu
        if (typeof tinymce !== 'undefined') {
            tinymce.init({
                selector: '#summernote',
                setup: function(editor) {
                    editor.on('init', function() {
                        // Ustaw początkową treść podglądu
                        updatePreviewContent(editor);
                    });

                    editor.on('change keyup NodeChange', function() {
                        // Aktualizuj podgląd przy każdej zmianie
                        updatePreviewContent(editor);
                    });
                }
            });
        }

        function updatePreviewContent(editor) {
            const content = editor.getContent({format: 'html'}).trim();
            previewContent.innerHTML = content || 'Brak treści';

            // Jeśli masz problemy z formatowaniem, możesz dodać:
            // previewContent.innerHTML = tinymce.activeEditor.getContent();
        }

        // Ustaw początkowy tytuł
        previewTitle.textContent = titleInput.value.trim() || 'Brak tytułu';
    });
</script>


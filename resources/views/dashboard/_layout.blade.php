<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>NOBEL - Dashboard</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('/assets/img/logo/favicon.png')}}" id="default-favicon">
    <link rel="icon" href="{{asset('/assets/img/logo/favicon_black.png')}}" media="(prefers-color-scheme: light)">
    <link rel="icon" href="{{asset('/assets/img/logo/favicon.png')}}" media="(prefers-color-scheme: dark)">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/plugins.css">
    <link rel="stylesheet" href="/assets/css/styleV2.css">
    <link rel="stylesheet" href="/assets/css/colors/pink.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- jQuery (ważne aby był przed Trumbowyg) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
<div class="content-wrapper">
    @include('dashboard._menu')
    <section class="wrapper bg-gray">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-10">
            <div class="g-3 justify-content-end">
                <div class="col-auto">
                    <div class="row g-3 mb-1">
                        @yield('buttons')
                    </div>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </section>
</div>

@include('components.success')
@include('components.error')

<!-- JS -->
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/theme.js"></script>
<script src="https://cdn.tiny.cloud/1/3mk8nrczubit374hm9lh47j023qt3h3sg9p273m8ng7c78gq/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

@yield('adminjs')

<!-- Inicjalizacja Trumbowyg -->
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'code table lists image link',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | image link',
        images_upload_url: '/upload-image',
        automatic_uploads: true,
        file_picker_types: 'image',
        image_title: true,
        paste_data_images: true,
        file_picker_callback: function (callback, value, meta) {
            if (meta.filetype === 'image') {
                const input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function () {
                    const file = this.files[0];
                    const reader = new FileReader();
                    reader.onload = function () {
                        callback(reader.result, { alt: file.name });
                    };
                    reader.readAsDataURL(file);
                };
                input.click();
            }
        }
    });
</script>
</body>
</html>

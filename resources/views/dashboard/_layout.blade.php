<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>NOBEL - Dashboard</title>

    <!-- Domyślne favicon (dla przeglądarek, które nie obsługują prefers-color-scheme) -->
    <link rel="shortcut icon" href="{{asset('/assets/img/logo/favicon.png')}}" id="default-favicon">

    <!-- Favicon dla trybu jasnego -->
    <link rel="icon" href="{{asset('/assets/img/logo/favicon_black.png')}}" media="(prefers-color-scheme: light)">

    <!-- Favicon dla trybu ciemnego -->
    <link rel="icon" href="{{asset('/assets/img/logo/favicon.png')}}" media="(prefers-color-scheme: dark)">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="/assets/css/plugins.css">
    <link rel="stylesheet" href="/assets/css/styleV2.css">
    <link rel="stylesheet" href="/assets/css/colors/pink.css">
    <link rel="stylesheet" href="/vendors/summernote-0.8.18-dist/summernote-lite.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/theme.js"></script>
<script src="/vendors/summernote-0.8.18-dist/summernote-lite.js"></script>
@yield('adminjs')
</body>

</html>

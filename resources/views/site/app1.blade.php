<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="{{ config('app.seo_meta_title') }}">
    <meta name="keywords" content="{{ config('app.seo_meta_description') }}">
    <meta name="author" content="AIT ELAHMADI Farah">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @include('site.partials.styles')
</head>
<body class="app sidebar-mini">
@include('site.partials.headerr')
<main class="app-content" id="app">
    @yield('content')
</main>
<script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('backend/js/popper.min.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/main.js') }}"></script>
{{-- <script src="{{ asset('backend/js/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('backend/js/lang/summernote-fr-FR.js') }}"></script> --}}
<script src="{{ asset('backend/js/plugins/pace.min.js') }}"></script>
@stack('scripts')
{{--<div id="myDiv"></div>--}}
@include('site.partials.footer')
{{--@include('site.partials.scripts')--}}
</body>
</html>

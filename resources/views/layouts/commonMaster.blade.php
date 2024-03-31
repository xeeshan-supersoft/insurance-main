<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}"
    data-base-url="{{ url('/') }}" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title') | Accord 360</title>
    <meta name="description"
        content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
    <meta name="keywords"
        content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Canonical SEO -->
    <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
        integrity="sha256-zaSoHBhwFdle0scfGEFUCwggPN7F+ip9XRglo8IWb4w=" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jqueryui@1.11.1/jquery-ui.min.css"
        integrity="sha256-orjEV2zLazjvpIqT0mVRAYVbewIvSmbv6s+l8tW9Xxg=" crossorigin="anonymous">

    <!-- Include Styles -->
    @include('layouts/sections/styles')

    <!-- Include Scripts for customizer, helper, analytics, config -->
    @include('layouts/sections/scriptsIncludes')
</head>

<body>


    <!-- Layout Content -->
    @yield('layoutContent')
    <!--/ Layout Content -->



    <!-- Include Scripts -->
    @include('layouts/sections/scripts')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.0.0/dist/jquery.min.js"
        integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"
        integrity="sha256-9yRP/2EFlblE92vzCA10469Ctd0jT48HnmmMw5rJZrA=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jqueryui@1.11.1/jquery-ui.min.js"
        integrity="sha256-4JY5MVcEmAVSuS6q4h9mrwCm6KNx91f3awsSQgwu0qc=" crossorigin="anonymous"></script>

    @stack('body-scripts')
</body>

</html>

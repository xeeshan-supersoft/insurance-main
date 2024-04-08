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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css"
        integrity="sha256-h2Gkn+H33lnKlQTNntQyLXMWq7/9XI2rlPCsLsVcUBs=" crossorigin="anonymous">

    <style>
        .select2-container--default .select2-selection--single {
            height: 50px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/materialdesignicons.css')) }}" />
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/node-waves/node-waves.css')) }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/core.css')) }}" />
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/theme-default.css')) }}" />

    <link rel="stylesheet" href="{{ asset(mix('assets/css/demo.css')) }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')) }}" />
</head>

<body>
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">INSURANCE/</span>INTERMODAL INTERCHANGE CERTIFICATE OF
        INSURANCE
    </h4>
    <p>THIS CERTIFICATE IS ISSUED AS A MATTER OF INFORMATION ONLY AND CONFERS NO RIGHTS UPON THE CERTIFICATE HOLDER.
        THIS
        CERTIFICATE DOES NOT AFFIRMATIVELY OR NEGATIVELY AMEND, EXTEND OR ALTER THE COVERAGE AFFORDED BY THE POLICIES
        BELOW. THIS CERTIFICATE OF INSURANCE DOES NOT CONSTITUTE A CONTRACT BETWEEN THE ISSUING INSURER(S), AUTHORIZED
        REPRESENTATIVE OR PRODUCER, AND THE CERTIFICATE HOLDER.</p>
    <!-- Basic Layout -->

    <div class="row">

        <!--------------- PRODUCER -------------->
        @include('agent.producer')

        <!----------- PRODUCER CONTACT info -------------->
        @include('agent.producer-contact')

        <!----------- INSURED info -------------->
        @include('agent.insured')

        <!----------- INSURER(S) AFFORDING COVERAGE -------------->
        @include('agent.insurance_company2')

    </div>


    <h4 class="py-3 mb-4">TYPE OF INSURANCE <span class="text-muted fw-light">INSURANCE/</span>COVERAGES</h4>
    <p>POLICIES. AGGREGATE LIMITS SHOWN MAY HAVE BEEN REDUCED BY PAID CLAIMS.
        MAY PERTAIN, THE INSURANCE AFFORDED BY THE POLICIES DESCRIBED HEREIN IS SUBJECT TO ALL THE TERMS, EXCLUSIONS AND
        CONDITIONS OF SUCH
        ANY REQUIREMENT, TERM OR CONDITION OF ANY CONTRACT OR OTHER DOCUMENT WITH RESPECT TO WHICH THIS CERTIFICATE MAY
        BE ISSUED OR
        THE POLICIES OF INSURANCE LISTED BELOW HAVE BEEN ISSUED TO THE INSURED NAMED ABOVE FOR THE POLICY PERIOD
        INDICATED. NOTWITHSTANDING</p>

    @include('agent.agent-policy2')

</body>

</html>

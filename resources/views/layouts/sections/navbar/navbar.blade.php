@php
    $containerNav = $containerNav ?? 'container-fluid';
    $navbarDetached = $navbarDetached ?? '';

@endphp

<!-- Navbar -->
@if (isset($navbarDetached) && $navbarDetached == 'navbar-detached')
    <nav class="layout-navbar {{ $containerNav }} navbar navbar-expand-xl {{ $navbarDetached }} align-items-center bg-navbar-theme"
        id="layout-navbar">
@endif
@if (isset($navbarDetached) && $navbarDetached == '')
    <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="{{ $containerNav }}">
@endif

<!--  Brand demo (display only for navbar-full and hide on below xl) -->
@if (isset($navbarFull))
    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
        <a href="{{ url('/') }}" class="app-brand-link gap-2">
            <span class="app-brand-logo demo">
                @include('_partials.macros', ['height' => 40])
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-1">{{ config('variables.templateName') }}</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
        </a>
    </div>
@endif


<!-- ! Not required for layout-without-menu -->
@if (!isset($navbarHideToggle))
    <div
        class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0{{ isset($menuHorizontal) ? ' d-xl-none ' : '' }} {{ isset($contentNavbar) ? ' d-xl-none ' : '' }}">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="mdi mdi-menu mdi-24px"></i>
        </a>
    </div>
@endif

<div class="navbar-nav-right d-flex align-items-center  justify-content-between" id="navbar-collapse">
    <div class="app-brand-logo  ">
        @include('_partials.macros', ['height' => 20])
    </div>
    <ul class="navbar-nav flex-row align-items-center  ">

        <!-- Place this tag where you want the button to render. -->
        <li class="nav-item  mx-3">
            Client
        </li>
        <li class="nav-item  mx-3">
            Pending Approvals
        </li>
        <li class="nav-item  mx-3">
            openRequests
        </li>
        <li class="nav-item  mx-5  pe-5">
            <a href="cert_1st_step"> NEW ACCORD Form</a>
        </li>
    </ul>
    <ul class="navbar-nav flex-row align-items-center">
        <li class="nav-item dropdown-notifications navbar-dropdown dropdown ms-5 me-xl-4 ps-5">
            <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow waves-effect waves-light"
                href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                <i class="mdi mdi-bell-outline mdi-24px"></i>
                <span
                    class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end py-0">
                <li class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                        <h6 class="fw-normal mb-0 me-auto">Notification</h6>
                        <span class="badge rounded-pill bg-label-primary">8 New</span>
                    </div>
                </li>
                <li class="dropdown-notifications-list scrollable-container ps">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action dropdown-notifications-item waves-effect">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar me-1">
                                        <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png"
                                            alt="" class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                    <h6 class="mb-1 text-truncate">Congratulation Lettie 🎉</h6>
                                    <small class="text-truncate text-body">Won the monthly best seller gold
                                        badge</small>
                                </div>
                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                    <small class="text-muted">1h ago</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item waves-effect">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar me-1">
                                        <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                    <h6 class="mb-1 text-truncate">Charles Franklin</h6>
                                    <small class="text-truncate text-body">Accepted your connection</small>
                                </div>
                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                    <small class="text-muted">12hr ago</small>
                                </div>
                            </div>
                        </li>
                        <li
                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read waves-effect">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar me-1">
                                        <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png"
                                            alt="" class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                    <h6 class="mb-1 text-truncate">New Message ✉️</h6>
                                    <small class="text-truncate text-body">You have new message from Natalie</small>
                                </div>
                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                    <small class="text-muted">1h ago</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item waves-effect">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar me-1">
                                        <span class="avatar-initial rounded-circle bg-label-success"><i
                                                class="mdi mdi-cart-outline"></i></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                    <h6 class="mb-1 text-truncate">Whoo! You have new order 🛒 </h6>
                                    <small class="text-truncate text-body">ACME Inc. made new order $1,154</small>
                                </div>
                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                    <small class="text-muted">1 day ago</small>
                                </div>
                            </div>
                        </li>
                        <li
                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read waves-effect">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar me-1">
                                        <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png"
                                            alt="" class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                    <h6 class="mb-1 text-truncate">Application has been approved 🚀 </h6>
                                    <small class="text-truncate text-body">Your ABC project application has been
                                        approved.</small>
                                </div>
                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                    <small class="text-muted">2 days ago</small>
                                </div>
                            </div>
                        </li>
                        <li
                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read waves-effect">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar me-1">
                                        <span class="avatar-initial rounded-circle bg-label-success"><i
                                                class="mdi mdi-chart-pie-outline"></i></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                    <h6 class="mb-1 text-truncate">Monthly report is generated</h6>
                                    <small class="text-truncate text-body">July monthly financial report is generated
                                    </small>
                                </div>
                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                    <small class="text-muted">3 days ago</small>
                                </div>
                            </div>
                        </li>
                        <li
                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read waves-effect">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar me-1">
                                        <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png"
                                            alt="" class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                    <h6 class="mb-1 text-truncate">Send connection request</h6>
                                    <small class="text-truncate text-body">Peter sent you connection request</small>
                                </div>
                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                    <small class="text-muted">4 days ago</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item waves-effect">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar me-1">
                                        <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png"
                                            alt="" class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                    <h6 class="mb-1 text-truncate">New message from Jane</h6>
                                    <small class="text-truncate text-body">Your have new message from Jane</small>
                                </div>
                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                    <small class="text-muted">5 days ago</small>
                                </div>
                            </div>
                        </li>
                        <li
                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read waves-effect">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar me-1">
                                        <span class="avatar-initial rounded-circle bg-label-warning"><i
                                                class="mdi mdi-alert-circle-outline"></i></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                    <h6 class="mb-1">CPU is running high</h6>
                                    <small class="text-truncate text-body">CPU Utilization Percent is currently at
                                        88.63%,</small>
                                </div>
                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                    <small class="text-muted">5 days ago</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </li>
                <li class="dropdown-menu-footer border-top p-3">
                    <a href="javascript:void(0);"
                        class="btn btn-primary d-flex justify-content-center waves-effect waves-light">Read all
                        notifications</a>
                </li>
            </ul>
        </li>
        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                <li>
                    <a class="dropdown-item pb-2 mb-1" href="javascript:void(0);">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-2 pe-1">
                                <div class="avatar avatar-online">
                                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                        class="w-px-40 h-auto rounded-circle">
                                </div>
                            </div> @php
                                $user = request()->user();
                            @endphp
                            <div class="flex-grow-1">
                                <h6 class="mb-0">{{ $user->username }}</h6>

                                <small class="text-muted">{{ $user->role_id }}</small>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider my-1"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                        <span class="align-middle">My Profile</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <i class='mdi mdi-cog-outline me-1 mdi-20px'></i>
                        <span class="align-middle">Settings</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <span class="d-flex align-items-center align-middle">
                            <i class="flex-shrink-0 mdi mdi-credit-card-outline me-1 mdi-20px"></i>
                            <span class="flex-grow-1 align-middle ms-1">Billing</span>
                            <span
                                class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider my-1"></div>
                </li>

            </ul>
        </li>
        <!--/ User -->
        <li class="nav-item  mx-3">
            <a class="dropdown-item" href="/logout">
                <i class='mdi mdi-power me-1 mdi-20px'></i>
                <span class="align-middle">Log Out</span>
            </a>
        </li>
    </ul>
</div>

@if (!isset($navbarDetached))
    </div>
@endif
</nav>
<div class="container-fluid py-4">
    <!-- Search -->
    <ul class="navbar-nav flex-row align-items-center ms-auto">
        <li>
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <i class="mdi mdi-magnify mdi-24px lh-0"></i>
                    <input type="text" id="searched" class="form-control border-0 shadow-none bg-body"
                        placeholder="LookUp MC Insured " aria-label="Search...">
                </div>
            </div>
        </li>
        <li>
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <i class="mdi mdi-magnify mdi-24px lh-0"></i>
                    <input type="text" id="searched" class="form-control border-0 shadow-none bg-body"
                        placeholder="Certificate Search" aria-label="Search...">
                </div>
            </div>
        </li>
    </ul>
    <!-- /Search -->
</div>
<div class="container-fluid bg-black ">
    <!-- Search -->
    <ul class="navbar-nav   flex-row align-items-center ms-1">
        <li>
            <a href="{{ route('dash') }}" class="btn btn-light">Dasboard</a>
        </li>
        <li>
            <a class="btn btn-light">Motor Carrier Insureds</a>
        </li>
        <li>
            <a class="btn btn-light">Company Information</a>
        </li>
    </ul>
    <!-- /Search -->
</div>

<!-- / Navbar -->

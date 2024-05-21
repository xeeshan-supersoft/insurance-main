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
            {{-- <a href="cert_1st_step"> NEW ACCORD Form</a> --}}
        </li>
    </ul>
    <ul class="navbar-nav flex-row align-items-center">
        <li class="nav-item dropdown-notifications navbar-dropdown dropdown ms-5 me-xl-4 ps-5">
            <a class="nav-link  btn btn-text-secondary px-5 mx-5 rounded-pill btn-icon dropdown-toggle hide-arrow waves-effect waves-light"
                href="{{route('notice')}}" >
                {{-- <span class="badge rounded-pill bg-label-primary text-xs">8 New</span> --}}
                @php


                    $noticesExist = \App\Models\Notice::where('status', 1)->exists();
                    @endphp
                <div class="avatar
                                   @if($noticesExist)
                  avatar-away
                  @endif

          
             ">
                <i class="mdi mdi-bell-outline mdi-24px"></i>
            </div>
            </a>
            
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

                                <small class="text-muted">{{ $user->role }}</small>
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
            <a class="dropdown-item" href="{{ route('logout') }}">
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
                        placeholder="LookUp MC Insured " aria-label="Search..."
                        @if ($user->role != "agent" )
                        disabled
                        @endif>
                </div>
            </div>
        </li>
        <li>
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <i class="mdi mdi-magnify mdi-24px lh-0"></i>
                    <input type="text" id="searched" class="form-control border-0 shadow-none bg-body"
                        placeholder="Certificate Search" aria-label="Search..."
                        @if ($user->role != "agent" )
                        disabled
                        @endif
                        >
                </div>
            </div>
        </li>
    </ul>
    <!-- /Search -->
</div>
<div class="container-fluid bg-black ">
    <!-- Search -->
    <ul class="navbar-nav   flex-row align-items-center ms-1">
        @if ($user->role == "agent")
        <li>
            <a href="{{ route('dash') }}" class="btn btn-light  ">Dasboard</a>
        </li>
        <li>
            <a href="{{ route('formlist') }}" class="btn btn-light  ">Motor Carrier Insureds</a>
        </li>
        <li>
            <a class="btn btn-light  ">Company Information</a>
        </li>     
    
        @elseif ($user->role == "admin")
    
        <li>
            <a class="btn btn-light" href="{{ route('sub') }}" >Subscription Plans</a>
        </li>
        <li>
            <a class="btn btn-light" href="{{ route('dashs') }}">Users</a>
        </li>

        @else

      <li>
            <a class="btn btn-light" href="{{ route('dashw') }}">Dasboard</a>
        </li>
      
        <li>
            <a class="btn btn-light" href="{{ route('list.ship') }}">Shipper list</a>
        </li>
        <li>
            <a class="btn btn-light" href="{{ route('add.ship') }}">Add shipper</a>
        </li>
        <li>
            <a class="btn btn-light" href="{{ route('add.agnt') }}">Add Agency</a>
        </li>
        <li>
            <a class="btn btn-light" href="{{ route('dashw') }}">Print Certificates</a>
        </li>

        <li>
            <a class="btn btn-light" href="{{ route('profile.truck') }}">Company Information</a>
        </li>
        @endif

    </ul>
    <!-- /Search -->
</div>

<!-- / Navbar -->

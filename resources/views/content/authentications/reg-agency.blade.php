<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
<head>
    <title>Laravel Livewire Example</title>
    @livewireStyles

  
    
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/materialdesignicons.css')) }}" />
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/node-waves/node-waves.css')) }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/core.css')) }}" />
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/theme-default.css')) }}" />
    
    <link rel="stylesheet" href="{{ asset(mix('assets/css/demo.css')) }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')) }}" />
  
    <link href="{{ asset('wizard.css') }}" rel="stylesheet" />
</head>
<body>    
<div class="container">  
    <div class=" " style="background-color: transparent">
      <div class="card-header text-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt class="" style="width: 180px">
        <h1 class="h2 text-center"> Motor Carrier Registration</h1>
      </div>
      <div class="card-body">
        <livewire:truckreg />
      </div>
    </div>        
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js"></script>

<script>
  $(document).ready(function() {
      $('#phone').inputmask({"mask": "+1 (999) 999-9999"});
  });
  $(document).ready(function() {
      $('#phonee').inputmask({"mask": "+1 (999) 999-9999"});
  });
</script>
@livewireScripts  

  @yield('page-scripts')
<script src="{{ asset(mix('assets/vendor/libs/popper/popper.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/bootstrap.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/node-waves/node-waves.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/menu.js')) }}"></script>
@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->


@stack('scripts')
</body> 
</html>
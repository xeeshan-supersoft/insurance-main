<!DOCTYPE html>
<html>
<head>
    <title>Laravel Livewire Example - ItSolutionStuff.com</title>
    @livewireStyles
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/materialdesignicons.css')) }}" />
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/node-waves/node-waves.css')) }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/core.css')) }}" />
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/theme-default.css')) }}" />
    
    <link rel="stylesheet" href="{{ asset(mix('assets/css/demo.css')) }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')) }}" />
  
    <link href="{{ asset('wizard.css') }}" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    
<div class="container">
    


    <div class=" " style="background-color: transparent">
      <div class="card-header text-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt class="" style="width: 180px">

        <h1 class="h2 text-center"> Participating Party Agreement </h1>
      </div>
      <div class="card-body">

        <livewire:Regtruck />

      </div>
    </div>
        
</div>
    
</body>
 
@livewireScripts
  
</html>
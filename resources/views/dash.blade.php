@php
$isMenu = false;
$navbarHideToggle = false;
@endphp
@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - main')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
<div class="row gy-4 justify-content-center">
  <div class="col-md-10 col-lg-10">
<div class="row gy-4">
  <!-- Congratulations card -->
  <div class="col-md-4 col-lg-4">
    <div class="card" style="background: rgb(42,132,254); background: linear-gradient(180deg, rgba(42,132,254,1) 0%, rgba(54,197,255,1) 100%);">
      <div class="card-body text-center">
        <a href="{{url('/formlist')}}"><h4 class="mb-1 py-4 text-white">Policy Expiring ia Month !</h4></a>
    
       
       
        <h2 class="py-3 text-white card-title" style="font-size: 72px">10</h2>
      </div>
    </div>
  </div>
  <!--/ Congratulations card -->
    <!-- Congratulations card -->
    <div class="col-md-4 col-lg-4">
      <div class="card" style="background: rgb(42,132,254); background: linear-gradient(180deg, rgba(42,132,254,1) 0%, rgba(54,197,255,1) 100%);">
        <div class="card-body text-center">
          <h4 class="mb-1 py-4 text-white">Policy Expiring ia Week !</h4>
      
         
         
          <h2 class="py-3 text-white card-title" style="font-size: 72px">13</h2>
        </div>
      </div>
    </div>
    <!--/ Congratulations card -->
      <!-- Congratulations card -->
  <div class="col-md-4 col-lg-4">
    <div class="card" style="background: rgb(42,132,254); background: linear-gradient(180deg, rgba(42,132,254,1) 0%, rgba(54,197,255,1) 100%);">
      <div class="card-body text-center">
        <h4 class="mb-1 py-4 text-white">No of Insureds !</h4>
    
       
       
        <h2 class="py-3 text-white card-title" style="font-size: 72px">1</h2>
      </div>
    </div>
  </div>
  <!--/ Congratulations card -->
  </div>
</div>
  <!-- Data Tables -->
  {{-- <div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <table class="table">
          <thead class="table-light">
            <tr>
              <th class="text-truncate">User</th>
              <th class="text-truncate">Email</th>
              <th class="text-truncate">Role</th>
              <th class="text-truncate">Status</th>
             
            </tr>
            
          </thead>
          <tbody> 
             @foreach ($users as $user) 
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate">@ {{$user->username}}</h6>
                    {{-- <small class="text-truncate">@amiccoo</small> --
                  </div>
                </div>
              
              </td>
              <td class="text-truncate">{{$user->email}}</td>

              @if ($user->role_id=='agent')
              <td class="text-truncate"><i class="mdi mdi-account-outline mdi-24px text-primary me-1"></i>{{$user->role_id}}</td>

              @elseif($user->role_id=='user')
              <td class="text-truncate"><i class="mdi mdi-chart-donut mdi-24px text-success me-1"></i>{{$user->role_id}}</td>
              @else
             
              <td class="text-truncate"><i class="mdi mdi-laptop mdi-24px text-danger me-1"></i>{{$user->role_id}}</td>
              @endif
              <td>
              <span class="badge bg-label-success rounded-pill">Active</span>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> --}}
  <!--/ Data Tables -->
</div>
@endsection

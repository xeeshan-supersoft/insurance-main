@php
    $isMenu = false;
    $navbarHideToggle = false;
@endphp
@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - main')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
    <style>
       .disabled-link {
    color: gray;
    pointer-events: none;
    cursor: not-allowed;
    text-decoration: none;
  }
    </style>
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')
    <div class="row gy-4 justify-content-center">
        <div class="col-md-10 col-lg-10">
            <div class="row gy-4">
    
        <!-- Data Tables -->
        <div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <table class="table">
          <thead class="table-light">
            <tr>
              <th class="text-truncate">User</th>
              <th class="text-truncate">Email</th>
              <th class="text-truncate">Role</th>
              <th class="text-truncate">Status</th>
              <th class="text-truncate">Action</th>

            </tr>

          </thead>
          <tbody>
             @foreach ($users as $user)
             @if ($user->role != "admin" )
             <tr>
               <td>
                 <div class="d-flex align-items-center">
                   <div class="avatar avatar-sm me-3">
                     <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                   </div>
                   <div>
                     <h6 class="mb-0 text-truncate">@ {{$user->name}}</h6>
                     {{-- <small class="text-truncate">@amiccoo</small> --}}
                   </div>
                 </div>
              
               </td>
               <td class="text-truncate">{{$user->email}}</td>           
               <td class="text-truncate">{{$user->role}}</td>
               <td> <span class="badge bg-label-success rounded-pill">Active</span></td>            
               <td>
                 <div class="dropdown">
                   <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                   <div class="dropdown-menu">                
                     <a class="dropdown-item"  href="{{route('edit_user', $user->id)}}"><i class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                     <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1"></i> Delete</a>
                   </div>
                 </div>
               </td>            
             </tr>
                 
             @endif



            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> 
        <!--/ Data Tables -->
    </div>
@endsection

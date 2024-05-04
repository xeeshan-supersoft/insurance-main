@extends('layouts/contentNavbarLayout')
@section('title', ' Vertical Layouts - Forms')
@section('content')
@php
    $isMenu = false;
    $navbarHideToggle = false;
@endphp

<div class="col-12">
  <div class="card">
    <div class="table-responsive">
      <table class="table">
        <h4 class="mb-1 py-4 px-4">list of Shipper</h4>
        <thead class="table-light">
          <tr>
            <th class="text-truncate">User</th>
            <th class="text-truncate">Email</th>
            <th class="text-truncate">Role</th>
            <th class="text-truncate">Status</th>

          </tr>

        </thead>
        <tbody>
           {{-- @foreach ($users as $user) --}}
          <tr>
            <td>
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm me-3">
                  <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                </div>
                <div>
                  <h6 class="mb-0 text-truncate">@ </h6>
            <small class="text-truncate">@amiccoo</small> --
                </div>
              </div>

            </td>
            <td class="text-truncate">asdf</td>

           
          </tr>
          {{-- @endforeach --}}
        </tbody>
      </table>
    </div>
  </div>
</div>
      <!--/ Data Tables -->


@endsection

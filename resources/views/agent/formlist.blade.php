@php
    $isMenu = false;
    $navbarHideToggle = false;
@endphp
@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')


@section('content')
    <div class="row gy-4">
        <!-- Data Tables -->
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th class="text-truncate">Serial</th>
                                <th class="text-truncate">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ dd($insurance_data) ;}} --}}
                            {{-- @foreach ($insurance_data as $data)

            <tr>
              <td>
                <div class="d-flex align-items-center">
                 <div>
                    <small class="text-truncate">{{$data->cname}}</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">{{$data->Iname}}</td>
             <td class="text-truncate">{{$data->POLICY_NUMBER}}</td>
              <td class="text-truncate">
                <a href="{{ route('agent.pdf', ['id' => $data->id]) }}" class="btn btn-lg rounded-pill btn-outline-primary waves-effect" style="margin-right: 8%">
                <span class="tf-icons mdi mdi-printer me-1"></span> </a>
              </td>
              <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" onclick="openEditModal({{ $data->id }})"><i class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
           @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Data Tables -->
    </div>
@endsection

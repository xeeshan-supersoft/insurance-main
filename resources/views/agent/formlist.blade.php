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
                            @foreach ($driver->agents as $data)
                                <tr>
                                    <td>
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <small class="text-truncate">{{ $data->name }}</small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Data Tables -->
    </div>
@endsection

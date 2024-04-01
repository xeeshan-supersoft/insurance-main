@php
    $isMenu = false;
    $navbarHideToggle = false;
@endphp
@extends('layouts/contentNavbarLayout')
@section('title', ' Certificate Form')
@section('content')
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">INSURANCE/</span>INTERMODAL INTERCHANGE CERTIFICATE OF INSURANCE
    </h4>

    <div class="row">
        <div class="col-sm-3">
            <a href="{{ route('cert_1st_step', $driverId) }}" class="btn btn-primary">Generate
                Certificate</a>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Certificate for driver</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                    @foreach ($certificate as $cert)
                        <tr>
                            <td>
                                <a href="{{ route('view_cert', $cert->id) }}" class="btn btn-primary">Show Certificate
                                    {{ $cert->id }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>

@endsection

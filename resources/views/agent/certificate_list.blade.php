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
            <a href="{{ $certificate->id }}" class="btn btn-primary">View Certificate</a>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Policy</th>
                        <th>Insurance Provider Code</th>
                        <th>Policy Number</th>
                        <th>Issue Date</th>
                        <th>Start Date</th>
                        <th>Expiry Date</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($certPolicy as $cp)
                        <tr>
                            <td>{{ $cp->policy->policy_title }}</td>
                            <td>{{ $cp->insurance_provider_code }}</td>
                            <td>{{ $cp->policy_number }}</td>
                            <td>{{ $cp->issue_date }}</td>
                            <td>{{ $cp->start_date }}</td>
                            <td>{{ $cp->expiry_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>

@endsection

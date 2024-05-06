@extends('layouts/contentNavbarLayout')
@section('title', ' Vertical Layouts - Forms')
@section('content')
    @php
        $isMenu = false;
        $navbarHideToggle = false;
    @endphp

    <div class="row gy-4 ">
        <div class="col-md-12 col-lg-12">
            <div class="row gy-4">
                <!-- Congratulations card -->
                <div class="col-md-3 col-lg-3">
                    <div class="card"
                        style="background: rgb(42,132,254); background: linear-gradient(180deg, rgba(42,132,254,1) 0%, rgba(54,197,255,1) 100%);">
                        <div class="card-body text-center">
                            <h4 class="mb-1 py-4 text-white">Policy Expiring in a Month !</h4>
                            <h2 class="py-3 text-white card-title" style="font-size: 72px">0</h2>
                        </div>
                    </div>
                </div>
                <!--/ Congratulations card -->
                <!-- Congratulations card -->
                <div class="col-md-3 col-lg-3">
                    <div class="card"
                        style="background: rgb(42,132,254); background: linear-gradient(180deg, rgba(42,132,254,1) 0%, rgba(54,197,255,1) 100%);">
                        <div class="card-body text-center">
                            <h4 class="mb-1 py-4 text-white">Policy Expiring in a Week !</h4>
                            <h2 class="py-3 text-white card-title" style="font-size: 72px">0</h2>
                        </div>
                    </div>
                </div>
                <!--/ Congratulations card -->


                <!-- Congratulations card -->
                <div class="col-md-3 col-lg-3">
                    <div class="card"
                        style="background: rgb(42,132,254); background: linear-gradient(180deg, rgba(42,132,254,1) 0%, rgba(54,197,255,1) 100%);">
                        <div class="card-body text-center">
                            <h4 class="mb-1 py-4 text-white">No.of Active Shippers</h4>
                            <h2 class="py-3 text-white card-title" style="font-size: 72px">0</h2>
                        </div>
                    </div>
                </div>
                <!--/ Congratulations card -->
                <!-- Congratulations card -->
                <div class="col-md-3 col-lg-3">
                    <div class="card"
                        style="background: rgb(42,132,254); background: linear-gradient(180deg, rgba(42,132,254,1) 0%, rgba(54,197,255,1) 100%);">
                        <div class="card-body text-center">
                            <h4 class="mb-1 py-4 text-white">No.of InActive Shippers</h4>
                            <h2 class="py-3 text-white card-title" style="font-size: 72px">0</h2>
                        </div>
                    </div>
                </div>
                <!--/ Congratulations card -->
            </div>
        </div>
        <!-- Data Tables -->
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <h4 class="mb-1 py-4 px-4">list of Coverages</h4>
                        <thead class="table-light">
                            <tr>
                                <th class="text-truncate">User</th>


                            </tr>

                        </thead>
                        <tbody>
                            {{-- @foreach ($users as $user) --}}
                            <tr>
                                @if (isset($policies))
                                    @foreach ($certificatePolicies->unique('policy_type_id') as $cp)
                                        @foreach ($policies->unique('id') as $p)
                                            @if ($cp->policy_type_id == $p->id)
                                                <td style="color: green;">{{ shout($p->type_name) }}</td>
                                            @else
                                                <td style="color: red;">{{ shout($p->type_name) }}</td>
                                            @endif
                                        @endforeach
                                    @endforeach
                                  @else
                                  <td style="color: grey;">No Data Available</td>
                                @endif
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Data Tables -->



        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <h4 class="mb-1 py-4 px-4">list of Shippers</h4>
                        <thead class="table-light">
                            <tr>
                                <th class="text-truncate">User</th>
                                <th class="text-truncate">Address</th>
                                <th class="text-truncate">Cellphone</th>
                                <th class="text-truncate">Email</th>
                                <th class="text-truncate">Status</th>

                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($ship as $ships)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div>
                                                <h6 class="mb-0 text-truncate"> {{ $ships->name }}</h6>

                                            </div>
                                        </div>

                                    </td>
                                    <td class="text-truncate">{{ $ships->address }}</td>
                                    <td class="text-truncate">{{ $ships->cellphone }}</td>
                                    <td class="text-truncate">{{ $ships->extra_email }}</td>
                                    <td>
                                        <span class="badge bg-label-success rounded-pill">Active</span>
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

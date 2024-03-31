@php
    $isMenu = false;
    $navbarHideToggle = false;
@endphp@extends('layouts/contentNavbarLayout')
@section('title', ' Certificate Form')
@section('content')
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">INSURANCE/</span>INTERMODAL INTERCHANGE CERTIFICATE OF INSURANCE
    </h4>
    <p>THIS CERTIFICATE IS ISSUED AS A MATTER OF INFORMATION ONLY AND CONFERS NO RIGHTS UPON THE CERTIFICATE HOLDER. THIS
        CERTIFICATE DOES NOT AFFIRMATIVELY OR NEGATIVELY AMEND, EXTEND OR ALTER THE COVERAGE AFFORDED BY THE POLICIES
        BELOW. THIS CERTIFICATE OF INSURANCE DOES NOT CONSTITUTE A CONTRACT BETWEEN THE ISSUING INSURER(S), AUTHORIZED
        REPRESENTATIVE OR PRODUCER, AND THE CERTIFICATE HOLDER.</p>
    <form method="post" action="save">
        @csrf
        <!-- Basic Layout -->

        <div class="row">
            <!---------------------------------------------------------------------------------------------------------------------------
                                                                                                                                                                                                                                                                                                                                                                                                                      --------------------------------------------------------------- PRODUCER  ---------------------------------------------------
                                                                                                                                                                                                                                                                                                                                                                                                                      ----------------------------------------------------------------------->
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">PRODUCER</h5> <small class="text-muted float-end">PRODUCER INFO</small>
                    </div>
                    <div class="card-body">

                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-fullname" placeholder="ACME Inc."
                                value="{{ $agent->agencies[0]->agency_name }}" readonly />
                            <label for="basic-default-fullname">Company</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company2"
                                placeholder="Address line1" value="{{ $agent->agencies[0]->agency_address }}" readonly />
                            <label for="basic-default-company2">Address</label>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-4">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="basic-default-email" class="form-control"
                                            placeholder="Westlake Village" value="{{ $agent->agencies[0]->agency_city }}"
                                            readonly />
                                        <label for="basic-default-email">City </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" id="basic-default-phone" class="form-control " placeholder="6583"
                                        value="{{ $agent->agencies[0]->agency_zip }}" readonly />
                                    <label for="basic-default-phone">Zip code</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" id="basic-default-phone" class="form-control " placeholder="CA"
                                        value="{{ $agent->agencies[0]->agency_state }}" readonly />
                                    <label for="basic-default-phone">State</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="44444" value="{{ $agent->agencies[0]->agency_zip }}" readonly />
                            <label for="basic-default-phone">Zip Code</label>
                        </div>


                    </div>
                </div>
            </div>


            <!---------------------------------------------------------------------------------------------------------------------------
                                                                                                                                                                                                                                                                                                                                                                                                                      --------------------------------------------------------------- CONTACT info   ---------------------------------------------------
                                                                                                                                                                                                                                                                                                                                                                                                                      ----------------------------------------------------------------------->

            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">CONTACT</h5> <small class="text-muted float-end">CONTACT</small>
                    </div>
                    <div class="card-body">

                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control"id="basic-default-fullname" placeholder="John Doe"
                                value="{{ $agent->name }}" readonly />
                            <label for="basic-default-fullname">Contact Name</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="658 799 8941" value="{{ $agent->agencies[0]->agency_cellphone }}" readonly />
                            <label for="basic-default-phone">Phone No</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="434652342342"
                                value="{{ $agent->agencies[0]->agency_fax }}" readonly />
                            <label for="basic-default-company">Fax No</label>
                        </div>
                        <div class="mb-4">
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" id="basic-default-company"
                                    placeholder="434652342342" value="{{ $agent->agencies[0]->agency_extra_email }}"
                                    readonly />
                                <label for="basic-default-company">Email</label>
                            </div>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" id="basic-default-phone" name="PC_ids"class="form-control phone-mask"
                                placeholder="658" value="{{ $agent->agencies[0]->producer_customer_number }}" readonly />
                            <label for="basic-default-phone">Producer Customer Ids</label>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!---------------------------------------------------------------------------------------------------------------------------
                                                                                                                                                                                                                                                                                                                                                                                                                      --------------------------------------------------------------- INSURED info   ---------------------------------------------------
                                                                                                                                                                                                                                                                                                                                                                                                                      ----------------------------------------------------------------------->

        <div class="row">
            <div class="col-5">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">INSURED</h5> <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">

                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-fullname"
                                placeholder="ACME Inc." value="{{ $driver->name }}" readonly />
                            <label for="basic-default-fullname">Company</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company2"
                                placeholder="Address line1" value="{{ $driver->truckers[0]->address }}" readonly />
                            <label for="basic-default-company2">Address</label>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-4">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="basic-default-email" class="form-control"
                                            placeholder="Westlake Village" value="{{ $driver->truckers[0]->city }}"
                                            readonly />
                                        <label for="basic-default-email">City </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" id="basic-default-phone" class="form-control"
                                        placeholder="6583" value="{{ $driver->truckers[0]->zip }}" readonly />
                                    <label for="basic-default-phone">Zip code</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" id="basic-default-phone" class="form-control" placeholder="CA"
                                        value="{{ $driver->truckers[0]->state }}" readonly />
                                    <label for="basic-default-phone">State</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="658 799 8941" value="{{ $driver->truckers[0]->contact_info }}" readonly />
                            <label for="basic-default-phone">Phone No</label>
                        </div>
                    </div>
                </div>
            </div>
            <!---------------------------------------------------------------------------------------------------------------------------
                                                                                                                                                                                                                                                                                                                                                                                                                      --------------------------------------------------------------- INSURER(S) AFFORDING COVERAGE   ---------------------------------------------------
                                                                                                                                                                                                                                                                                                                                                                                                                      ----------------------------------------------------------------------->

            <div class="col-7">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">INSURER(S) AFFORDING COVERAGE</h5> <small
                            class="text-muted float-end">CONTACT</small>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-fullname"
                                        name="insur_a" placeholder="Navigators Insurance Company " />
                                    <label for="basic-default-fullname">INSURER A</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" name="naic_a" id="basic-default-company"
                                        placeholder="29424" />
                                    <label for="basic-default-company">NAIC #</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" name="br_a"id="basic-default-company"
                                        placeholder="A++ 04-1" />
                                    <label for="basic-default-company">Best Rating </label>
                                </div>
                            </div>
                        </div>
                        <!--------------------------------------------------------------bbbbbb------------------------------------------------------------->

                        <div class="row">
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-fullname"
                                        name="insur_b" placeholder="Navigators Insurance Company " />
                                    <label for="basic-default-fullname">INSURER B</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-company"
                                        name="naic_b"placeholder="29424" />
                                    <label for="basic-default-company">NAIC #</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-company" name="br_b"
                                        placeholder="A++ 04-1" />
                                    <label for="basic-default-company">Best Rating </label>
                                </div>
                            </div>
                        </div>
                        <!--------------------------------------------------------------ccccccc------------------------------------------------------------->

                        <div class="row">
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-fullname"
                                        name="insur_c"placeholder="Navigators Insurance Company " />
                                    <label for="basic-default-fullname">INSURER C</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-company"
                                        name="naic_c"placeholder="29424" />
                                    <label for="basic-default-company">NAIC #</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-company" name="br_c"
                                        placeholder="A++ 04-1" />
                                    <label for="basic-default-company">Best Rating </label>
                                </div>
                            </div>
                        </div>
                        <!--------------------------------------------------------------dddddd------------------------------------------------------------->

                        <div class="row">
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-fullname"
                                        name="insur_d"placeholder="Navigators Insurance Company " />
                                    <label for="basic-default-fullname">INSURER D</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-company"
                                        name="naic_d"placeholder="29424" />
                                    <label for="basic-default-company">NAIC #</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-company" name="br_d"
                                        placeholder="A++ 04-1" />
                                    <label for="basic-default-company">Best Rating </label>
                                </div>
                            </div>
                        </div>
                        <!--------------------------------------------------------------eeeeee------------------------------------------------------------->

                        <div class="row">
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-fullname"
                                        name="insur_e" placeholder="Navigators Insurance Company " />
                                    <label for="basic-default-fullname">INSURER E</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-company" name="naic_e"
                                        placeholder="29424" />
                                    <label for="basic-default-company">NAIC #</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-company" name="br_e"
                                        placeholder="A++ 04-1" />
                                    <label for="basic-default-company">Best Rating </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>


        <h4 class="py-3 mb-4">TYPE OF INSURANCE <span class="text-muted fw-light">INSURANCE/</span>COVERAGES</h4>
        <p>POLICIES. AGGREGATE LIMITS SHOWN MAY HAVE BEEN REDUCED BY PAID CLAIMS.
            MAY PERTAIN, THE INSURANCE AFFORDED BY THE POLICIES DESCRIBED HEREIN IS SUBJECT TO ALL THE TERMS, EXCLUSIONS AND
            CONDITIONS OF SUCH
            ANY REQUIREMENT, TERM OR CONDITION OF ANY CONTRACT OR OTHER DOCUMENT WITH RESPECT TO WHICH THIS CERTIFICATE MAY
            BE ISSUED OR
            THE POLICIES OF INSURANCE LISTED BELOW HAVE BEEN ISSUED TO THE INSURED NAMED ABOVE FOR THE POLICY PERIOD
            INDICATED. NOTWITHSTANDING</p>
        <!-- Basic Layout -->
        <div class="row">
            @foreach ($policytypes as $pt)
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">{{ $pt->type_name }}</h5> <small class="text-muted float-end">CONTACT</small>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-company"
                                        name="gl_pol_num" placeholder="EXP116564305-33" />
                                    <label for="basic-default-company">POLICY NUMBER </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="date" class="form-control" id="html5-date-input"
                                        name="gl_pol_eff_date" placeholder="A++ 04-1" />
                                    <label for="basic-default-company">POLICY EFFECTIV DATE </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="date" class="form-control" id="html5-date-input"
                                        name="gl_pol_exp_date" placeholder="A++ 04-1" />
                                    <label for="basic-default-company">POLICY EXPIRATION DATE </label>
                                </div>
                            </div>
                            <div class="col-6">
                                @foreach ($pt->policies as $pp)
                                    @if ($pp->policy_title == 'DEDUCTIBLE')
                                        <div class="form-check form-check-inline mt-3">
                                            <label class="form-check-label" for="{{ $pp->id }}">
                                                {{ $pp->policy_title }}
                                            </label>
                                            <input class="form-check-input" type="checkbox" value="{{ $pp->id }}"
                                                name="{{ $pp->id }}" id="{{ $pp->id }}" />
                                        </div>
                                        <div class="form-check form-check-inline mt-3">
                                            <input type="text" class="form-control" id="{{ $pp->id }}"
                                                name="DEDUCTIBLE_unit" placeholder="$" />
                                        </div>
                                    @elseif ($pp->policy_title == 'RETENTION')
                                        <br>
                                        <div class="form-check form-check-inline mt-3">
                                            <label class="form-check-label" for="{{ $pp->id }}">
                                                {{ $pp->policy_title }}
                                            </label>
                                            <input class="form-check-input" type="checkbox" value="{{ $pp->id }}"
                                                name="{{ $pp->id }}" id="{{ $pp->id }}" />
                                        </div>
                                        <div class="form-check form-check-inline mt-3">
                                            <input type="text" class="form-control" id="{{ $pp->id }}"
                                                name="RETENTION_unit" placeholder="$" />
                                        </div>
                                    @elseif (preg_match('/\bDED\b/', $pp->policy_title))
                                        <div class="form-check form-check-inline mt-3">
                                            <label class="form-check-label" for="{{ $pp->id }}">
                                                {{ $pp->policy_title }}
                                            </label>
                                            <input class="form-check-input" type="checkbox" value="{{ $pp->id }}"
                                                name="{{ $pp->id }}" id="{{ $pp->id }}" />
                                        </div>
                                        <div class="form-check form-check-inline mt-3">
                                            <input type="text" class="form-control" id="{{ $pp->id }}"
                                                name="RETENTION_unit" placeholder="$" />
                                        </div>
                                    @else
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                name="{{ $pp->id }}" id="{{ $pp->id }}" />
                                            <label class="form-check-label" for="{{ $pp->id }}">
                                                {{ $pp->policy_title }}
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-6">
                                @foreach ($pt->policyLimits as $pl)
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" id="{{ $pl->id }}"
                                            name="{{ $pl->coverage_item }}" placeholder="" />
                                        <label for="basic-default-company">{{ $pl->coverage_item }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div><!-- Basic card-body -->
            @endforeach

            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" id="basic-default-company"
                                    name="CERTIFICATE_HOLDER" placeholder="" />
                                <label for="basic-default-company">CERTIFICATE HOLDER </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" id="basic-default-company"
                                    name="REPRESENTATIVE" placeholder="" />
                                <label for="basic-default-company">AUTHORIZED REPRESENTATIVE</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="1" name="checkbox" id="defaultCheck1"
                    required />
                <label class="form-check-label" for="defaultCheck1">
                    DESCRIPTION OF OPERATIONS / VEHICLES / EXCLUSIONS ADDED BY ENDORSEMENT / SPECIAL PROVISIONS (Attach
                    ACORD 101, Additional Remarks Schedule, if more space is required)
                    The Truckers Uniform Intermodal Interchange Endorsement (Form UIIE-1 or CA 23-17 equivalent) is part of
                    the auto policy(ies). The attached list of providers are additional insureds in
                    regards to the auto liability. Those providers with (*) are additional insureds on the general liability
                    and those with (**) are additional insureds on trailer interchange coverage.

                </label>
            </div>


        </div><!-- Basic card -->

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">ADDITIONAL REMARKS SCHEDULE</h5> <small class="text-muted float-end">Page 2 of
                    4</small>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company"
                                name="AGENCY_CUSTOMER_ID" placeholder="" />
                            <label for="basic-default-company">AGENCY CUSTOMER ID </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="loc"
                                placeholder="" />
                            <label for="basic-default-company">LOC#</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="date" class="form-control" id="html5-date-input" name="EFFECTIVE_DATE"
                                placeholder="" />
                            <label for="basic-default-company">EFFECTIVE DATE </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="AGENCY_n"
                                placeholder="" />
                            <label for="basic-default-company">AGENCY</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="NAMEDINSURED"
                                placeholder="" />
                            <label for="basic-default-company">NAMED INSURED </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="POLICY_NUMBER"
                                placeholder="" />
                            <label for="basic-default-company">POLICY NUMBER </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="CARRIER"
                                placeholder="" />
                            <label for="basic-default-company">CARRIER</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="NAIC_CODE"
                                placeholder="" />
                            <label for="basic-default-company">NAIC CODE</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="addre"
                                placeholder="" />
                            <label for="basic-default-company">Address</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="FORM_NUMBER"
                                placeholder="" />
                            <label for="basic-default-company">FORM NUMBER</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="FORM_TITLE"
                                placeholder="" />
                            <label for="basic-default-company">FORM TITLE</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating form-floating-outline mb-4">
                            <textarea class="form-control h-px-100" name="additional" id="exampleFormControlTextarea1"
                                placeholder="Comments here..."></textarea>
                            <label for="basic-default-company">Additional Insurance Policies</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">ADDITIONAL REMARKS SCHEDULE</h5> <small class="text-muted float-end">Page 3 of
                    4</small>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company"
                                name="AGENCY_CUSTOMER_ID2" placeholder="" />
                            <label for="basic-default-company">AGENCY CUSTOMER ID </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="loc2"
                                placeholder="" />
                            <label for="basic-default-company">LOC#</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="date" class="form-control" id="html5-date-input" name="EFFECTIVE_DATE2"
                                placeholder="" />
                            <label for="basic-default-company">EFFECTIVE DATE </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="AGENCY_n2"
                                placeholder="" />
                            <label for="basic-default-company">AGENCY</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="NAMEDINSURED2"
                                placeholder="" />
                            <label for="basic-default-company">NAMED INSURED </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="POLICY_NUMBER2"
                                placeholder="" />
                            <label for="basic-default-company">POLICY NUMBER </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="CARRIER2"
                                placeholder="" />
                            <label for="basic-default-company">CARRIER</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="NAIC_CODE2"
                                placeholder="" />
                            <label for="basic-default-company">NAIC CODE</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="addre2"
                                placeholder="" />
                            <label for="basic-default-company">Address</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="FORM_NUMBER2"
                                placeholder="" />
                            <label for="basic-default-company">FORM NUMBER</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="FORM_TITLE2"
                                placeholder="" />
                            <label for="basic-default-company">FORM TITLE</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating form-floating-outline mb-4">
                            <textarea class="form-control h-px-100" name="additional2" id="exampleFormControlTextarea1"
                                placeholder="Comments here..."></textarea>
                            <label for="basic-default-company">Additional Insurance Policies</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">ADDITIONAL REMARKS SCHEDULE</h5> <small class="text-muted float-end">Page 4 of
                    4</small>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company"
                                name="AGENCY_CUSTOMER_ID3" placeholder="" />
                            <label for="basic-default-company">AGENCY CUSTOMER ID </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="loc3"
                                placeholder="" />
                            <label for="basic-default-company">LOC#</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="date" class="form-control" id="html5-date-input" name="EFFECTIVE_DATE3"
                                placeholder="" />
                            <label for="basic-default-company">EFFECTIVE DATE </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="AGENCY_n3"
                                placeholder="" />
                            <label for="basic-default-company">AGENCY</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="NAMEDINSURED3"
                                placeholder="" />
                            <label for="basic-default-company">NAMED INSURED </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="POLICY_NUMBER3"
                                placeholder="" />
                            <label for="basic-default-company">POLICY NUMBER </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="CARRIER3"
                                placeholder="" />
                            <label for="basic-default-company">CARRIER</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="NAIC_CODE3"
                                placeholder="" />
                            <label for="basic-default-company">NAIC CODE</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="addre3"
                                placeholder="" />
                            <label for="basic-default-company">Address</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="FORM_NUMBER3"
                                placeholder="" />
                            <label for="basic-default-company">FORM NUMBER</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" name="FORM_TITLE3"
                                placeholder="" />
                            <label for="basic-default-company">FORM TITLE</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating form-floating-outline mb-4">
                            <textarea class="form-control h-px-100" name="additional3" id="exampleFormControlTextarea1"
                                placeholder="Comments here..."></textarea>
                            <label for="basic-default-company">Additional Insurance Policies</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <button type="submit" class="btn btn-primary">Generate</button>
    </form>

@endsection

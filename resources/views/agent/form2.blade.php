@php
    $isMenu = false;
    $navbarHideToggle = false;
@endphp
@extends('layouts/contentNavbarLayout')
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

            <!--------------- PRODUCER -------------->
            @include('agent.producer')

            <!----------- PRODUCER CONTACT info -------------->
            @include('agent.producer-contact')

            <!----------- INSURED info -------------->
            @include('agent.insured')

            <!----------- INSURER(S) AFFORDING COVERAGE -------------->
            @include('agent.insurance_company')

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
                        <input type="text" class="" oninput="validateInput(event)" id="IAC"size="1"
                            maxlength="1" oninput="this.value = this.value.toUpperCase();" style="width: 25px;"
                            name="gl_pol_num" />
                        <div id="error-message" style="color: red; display: none;">Error: Only 'a', 'b', 'c', 'd', or 'e'
                            are allowed!</div>
                        <h5 class="mb-0">{{ $pt->type_name }}</h5> <small class="text-muted float-end">CONTACT</small>
                        <input type="text" class="" oninput="validateInput(event)" id="IAC"size="1"
                            maxlength="1" oninput="this.value = this.value.toUpperCase();" style="width: 25px;"
                            name="gl_pol_num" />
                        <div id="error-message" style="color: red; display: none;">Error: Only 'a', 'b', 'c', 'd', or 'e'
                            are allowed!</div>
                        <h5 class="mb-0">{{ $pt->type_name }}</h5> <small class="text-muted float-end">CONTACT</small>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="basic-default-company" name="gl_pol_num"
                                        placeholder="EXP116564305-33" />
                                    <label for="basic-default-company">POLICY NUMBER </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="date" class="form-control" id="html5-date-input" name="gl_pol_eff_date"
                                        placeholder="A++ 04-1" />
                                    <label for="basic-default-company">POLICY EFFECTIV DATE </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="date" class="form-control" id="html5-date-input" name="gl_pol_exp_date"
                                        placeholder="A++ 04-1" />
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

    <<<<<<< HEAD @push('body-scripts') <script type="text/javascript">
        $('.js-example-basic-single').select2({
            ajax: {
                url: "{{ route('insurSearch') }}",
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });
    </script>
    @endpush
    =======
    @include('agent.agent-script')
    >>>>>>> ab1fc2e (Form Changes)
@endsection

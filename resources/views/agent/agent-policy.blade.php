 <!-- Basic Layout -->
 <div class="row">
     @foreach ($policytypes as $pt)
         <div class="card mb-4">
             <div class="card-header d-flex justify-content-between align-items-center">
                 <input type="text" class="" oninput="validateInput(event)" id="IAC"size="1" maxlength="1"
                     oninput="this.value = this.value.toUpperCase();" style="width: 25px;" name="gl_pol_num" />
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
                         <input type="text" class="form-control" id="basic-default-company" name="REPRESENTATIVE"
                             placeholder="" />
                         <label for="basic-default-company">AUTHORIZED REPRESENTATIVE</label>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     {{-- <div class="form-check mt-3">
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
     </div> --}}


 </div><!-- Basic card -->

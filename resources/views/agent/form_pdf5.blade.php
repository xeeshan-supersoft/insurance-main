<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/materialdesignicons.css')) }}" />
  <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/node-waves/node-waves.css')) }}" />
  <!-- Core CSS -->

  <link rel="stylesheet" href="{{ asset(mix('assets/css/demo.css')) }}" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')) }}" />
  @stack('body-css')

  <link rel="stylesheet" href="{{ asset('assets/css/accord.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}" />
</head>

<body>

  <div id="contentToPdf">
    <div class="container">

      <div id="acordPage" fxlayout="row" class="page-layout simple right-sidebar ng-tns-c268-42"
        style="flex-direction: row; box-sizing: border-box; display: flex;">

        <div fuseperfectscrollbar="" class="center ng-tns-c268-42 ps"
          style="flex-direction: column; box-sizing: border-box; display: flex;">
          <div class="ps__rail-x" style="left: 0px; top: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
          </div>
          <div class="ps__rail-y" style="top: 0px; left: 0px; height: 1357px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
          </div>
          <div fxlayout="column" fxlayoutalign="space-between" class="header ng-tns-c268-42"
            style="flex-direction: column; box-sizing: border-box; display: flex; place-content: stretch space-between; align-items: stretch;">
            <div fxlayout="row wrap" fxflex="100%" fxflex.xs="100%" fxflex.sm="100%"
              class="widget-group tableBox pt-0 ng-tns-c268-42 ng-trigger ng-trigger-animateStagger">
              <div fxlayout="row" fxflex="100%" fxflex.xs="100%" fxflex.sm="100%"
                class="widget ng-tns-c268-42 ng-trigger ng-trigger-animate"
                style="flex-direction: row; box-sizing: border-box; display: flex; flex: 1 1 100%; max-width: 100%;">
                <div class="fuse-widget-front ng-tns-c268-42">
                  <div fxlayout="row wrap" fxlayoutalign="start"
                    class="ng-tns-c268-42 ng-trigger ng-trigger-slideIn ng-star-inserted"
                    style="flex-flow: wrap; box-sizing: border-box; display: flex; place-content: stretch flex-start; align-items: stretch;">
                    <div fxlayout="column" fxflex="100" fxflex.gt-xs="100" fxflex.gt-md="100"
                      class="widget p-lr-24 ng-tns-c268-42 ng-trigger ng-trigger-animate"
                      style="flex-direction: column; box-sizing: border-box; display: flex; flex: 1 1 100%; max-width: 100%;">
                      <div class="widget-front box m-0 bn_n ng-tns-c268-42">
                        <div fxlayout="row" fxlayoutalign="start" class="p-10 ng-tns-c268-42"
                          style="flex-direction: row; box-sizing: border-box; display: flex; place-content: stretch flex-start; align-items: stretch;">
                          <form novalidate="" name="acordForm" style="width: 100% !important;"
                            class="ng-tns-c268-42 ng-untouched ng-pristine ng-invalid">
                            <div id="accord_container" class="ng-tns-c268-42">
                              <table  cellpadding="0" cellspacing="0" class="tftable ng-tns-c268-42">
                                <tbody class="ng-tns-c268-42">
                                  <tr class="ng-tns-c268-42">
                                    <td colspan="2" valign="middle" class="p-0 ng-tns-c268-42">
                                      <table width="100%" cellpadding="0" cellspacing="0"
                                        class="ng-tns-c268-42">
                                        <tr class="ng-tns-c268-42">
                                          <td class="ng-tns-c268-42"><span class="acord_title ng-tns-c268-42"><img
                                                src="{{ asset('assets/img/nlogo.png')}}" width="91" height="39"
                                                class="ng-tns-c268-42 text-center">
                                              &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                              &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                              &nbsp;&nbsp;&nbsp;&nbsp;
                                              &nbsp;&nbsp;
                                              &nbsp;&nbsp;&nbsp;&nbsp;
                                              &nbsp;&nbsp;
                                              &nbsp;&nbsp;
                                              &nbsp;&nbsp;&nbsp;&nbsp;
                                              &nbsp;&nbsp;
                                              CERTIFICATE OF LIABILITY
                                              INSURANCE</span>
                                          </td>
                                          <td width="180" class="date_top ng-tns-c268-42">
                                             <mat-form-field appearance="outline"
                                              class="mat-form-field ng-tns-c268-42 ng-tns-c70-48 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-star-inserted mat-form-field-should-float mat-form-field-disabled"
                                              style="width: 170px !important;">
                                              <div class="mat-form-field-wrapper ng-tns-c70-48">
                                                <div class="mat-form-field-infix ng-tns-c70-48">
                                                  <mat-datepicker class="ng-tns-c70-48">
                                                  </mat-datepicker><span
                                                    class="mat-form-field-label-wrapper ng-tns-c70-48"></span>
                                                </div>
                                                <div class="mat-form-field-suffix ng-tns-c70-48 ng-star-inserted">
                                                  <mat-datepicker-toggle matsuffix=""
                                                    class="mat-datepicker-toggle ng-tns-c70-48"
                                                    data-mat-calendar="mat-datepicker-0">
                                                    <button mat-icon-button="" type="button"
                                                      class="mat-focus-indicator mat-icon-button mat-button-base mat-button-disabled"
                                                      aria-haspopup="dialog" aria-label="Open calendar" tabindex="-1"
                                                      disabled="true"><span matripple=""
                                                        class="mat-ripple mat-button-ripple mat-button-ripple-round"></span><span
                                                        class="mat-button-focus-overlay"></span></button>
                                                  </mat-datepicker-toggle>
                                                </div>
                                              </div>
                                              <div class="mat-form-field-subscript-wrapper ng-tns-c70-48">
                                                <div
                                                  class="mat-form-field-hint-wrapper ng-tns-c70-48 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                  style="opacity: 1; transform: translateY(0%);">
                                                  <div class="mat-form-field-hint-spacer ng-tns-c70-48">
                                                  </div>
                                                </div>
                                              </div>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <table  cellpadding="0" cellspacing="0" class="tftable ng-tns-c268-42">
                              <tbody class="ng-tns-c268-42">
                                  <tr class="ng-tns-c268-42">
                                    <td colspan="2" class="ng-tns-c268-42">
                                      <div class="acord_title_matter ng-tns-c268-42">THIS
                                        CERTIFICATE IS
                                        ISSUED AS A MATTER OF INFORMATION ONLY AND CONFERS
                                        NO RIGHTS
                                        UPON THE CERTIFICATE HOLDER. THIS CERTIFICATE DOES
                                        NOT
                                        AFFIRMATIVELY OR NEGATIVELY AMEND, EXTEND OR ALTER
                                        THE COVERAGE
                                        AFFORDED BY THE POLICIES BELOW. THIS CERTIFICATE OF
                                        INSURANCE
                                        DOES NOT CONSTITUTE A CONTRACT BETWEEN THE ISSUING
                                        INSURER(S),
                                        AUTHORIZED REPRESENTATIVE OR PRODUCER, AND THE
                                        CERTIFICATE
                                        HOLDER. </div>
                                    </td>
                                  </tr>
                                  <tr class="ng-tns-c268-42">
                                    <td width="35%" valign="top" class="p-0 ng-tns-c268-42">
                                      <table width="100%" cellpadding="0" cellspacing="0"  style="min-height: 90px;"
                                        class="ng-tns-c268-42">
                                        <tbody class="ng-tns-c268-42">
                                          <tr height="73" class="ng-tns-c268-42">
                                            <td width="100" valign="middle" class="lable_title ng-tns-c268-42">
                                              PRODUCER

                                              {{ $agent->agencies[0]->agency_name }}<br class="ng-tns-c268-42">
                                              {{ $agent->agencies[0]->agency_address }}<br class="ng-tns-c268-42">
                                              {{ $agent->agencies[0]->agency_city }}
                                              {{ $agent->agencies[0]->agency_state }}
                                              ,
                                              {{ $agent->agencies[0]->agency_zip }} <br class="ng-tns-c268-42">
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                    <td width="65%" valign="top" class="p-0 ng-tns-c268-42">
                                      <table width="100%" cellpadding="0" cellspacing="0"
                                        class="agenc_sub_table a_s_t_b ng-tns-c268-42" style="min-height: 90px;">
                                        <tbody class="ng-tns-c268-42">
                                          <tr class="ng-tns-c268-42">
                                            <td class="lable_title tab_fild_set ng-tns-c268-42">
                                              CONTACT NAME:</td>
                                            <td colspan="3" class="ng-tns-c268-42"> Nick
                                              {{ $agent->name }}
                                            </td>
                                          </tr>
                                          <tr class="ng-tns-c268-42">
                                            <td width="22%" class="lable_title ng-tns-c268-42"><span
                                                class="ng-tns-c268-42">PHONE</span>
                                              (A/C, No,
                                              Ext): </td>
                                            <td class="ng-tns-c268-42">{{ $agent->agencies[0]->agency_cellphone }}</td>
                                            <td width="26%" class="lable_title tab_fild_set ng-tns-c268-42">
                                              <span class="ng-tns-c268-42">FAX (A/C,
                                                No):</span>
                                            </td>
                                            <td width="26%" class="tab_fild_set ng-tns-c268-42">
                                              {{ $agent->agencies[0]->agency_fax }}
                                            </td>
                                          </tr>
                                          <tr class="ng-tns-c268-42">
                                            <td width="22%" class="lable_title ng-tns-c268-42"><span
                                                class="ng-tns-c268-42">E-MAIL</span>
                                              ADDRESS:
                                            </td>
                                            <td width="26%" class="ng-tns-c268-42">
                                              {{ $agent->agencies[0]->agency_extra_email }} </td>
                                            <td width="25%" class="lable_title ng-tns-c268-42"><span
                                                class="ng-tns-c268-42">PRODUCER</span>
                                              CUSTOMER
                                              ID #: </td>
                                            <td width="25%" class="ng-tns-c268-42">
                                              {{ $agent->agencies[0]->producer_customer_number }}</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                  <tr class="ng-tns-c268-42">
                                    <td width="35%" valign="top" class="p-0 ng-tns-c268-42">
                                      <table width="100%" cellpadding="0" cellspacing="0"  style="min-height:100px;"
                                        class="ng-tns-c268-42">
                                        <tbody class="ng-tns-c268-42">
                                          <tr height="70" class="ng-tns-c268-42">
                                            <td width="100" valign="middle" class="lable_title ng-tns-c268-42">
                                              INSURED

                                              {{ $driver->name }}<br class="ng-tns-c268-42">
                                              {{ $driver->truckers[0]->address }} <br class="ng-tns-c268-42">
                                              {{ $driver->truckers[0]->city }}
                                              {{ $driver->truckers[0]->state }} <br class="ng-tns-c268-42"> ,
                                              {{ $driver->truckers[0]->zip }}
                                              <br class="ng-tns-c268-42">
                                              {{ $driver->truckers[0]->contact_info }} ,
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                    <td width="65%" valign="top" class="p-0 ng-tns-c268-42">
                                      <table width="100%" cellpadding="0" cellspacing="0"
                                        formgroupname="iaInsurerForm"
                                        class="agenc_sub_table a_s_t_b ng-tns-c268-42 ng-untouched ng-pristine ng-valid"
                                        style="min-height:100px;">
                                        <tbody class="ng-tns-c268-42">
                                          <tr class="ng-tns-c268-42">
                                            <td width="18%" class="w-120 tab_fild_set ng-tns-c268-42 td">
                                            </td>
                                            <td width="35%"  class="lable_title ng-tns-c268-42 td">
                                              INSURER(S)
                                              AFFORDING COVERAGE</td>
                                            <td width="20%"  class="lable_title tab_fild_set ng-tns-c268-42 td">
                                              NAIC
                                              #</td>
                                            <td width="18%"  class="lable_title tab_fild_set ng-tns-c268-42 td">
                                              BEST
                                              RATING</td>
                                          </tr>
                                          <tr class="ng-tns-c268-42">
                                            <td class="lable_title ng-tns-c268-42 td">
                                              INSURER A : </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-49">
                                                <input matinput="" placeholder="Enter Insurer A Details"
                                                  formcontrolname="insurerA"
                                                  value="@if (isset(  $certPolicy ) ){{ $certPolicy->first()->insuranceProvider->name }} @endif"
                                                  class="js-example-basic-single form-control mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-49 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="insurA" data-placeholder="Enter Insurer A Details" aria-invalid="false"
                                                  aria-required="false" autocomplete="off" role="combobox"
                                                  aria-autocomplete="list" aria-expanded="false" aria-haspopup="listbox" />
                                                <input type="hidden" id="insurance_provider_id_A"
                                                  name="insurance_provider_id[]"
                                                  value="@if(isset($certPolicy)){{$certPolicy->first()->insuranceProvider->id}}@endif" />
                                                <div id="insurerAList">
                                                </div>
                                                <mat-autocomplete panelwidth="auto" class="mat-autocomplete ng-tns-c70-49">
                                                </mat-autocomplete><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-49"></span>
                                              </div>

                                            </td>
                                            <td class="opd_td ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-50">
                                                <input matinput="" placeholder="Enter Insurer A Details"
                                                  formcontrolname="insNaicNoA"
                                                  value="@if (isset(  $certPolicy ) ){{ $certPolicy->first()->insuranceProvider->naic_number }} @endif"
                                                  class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-50 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="naic_a" data-placeholder="Enter Insurer A Details" aria-invalid="false"
                                                  aria-required="false" autocomplete="off" role="combobox"
                                                  aria-autocomplete="list" aria-expanded="false" aria-haspopup="listbox"
                                                  readonly />
                                              </div>

                                            </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-51">
                                                <input autocomplete="off" matinput="" formcontrolname="insBestRatingA"
                                                  readonly="true"
                                                  value="@if (isset(  $certPolicy ) ){{ $certPolicy->first()->insuranceProvider->best_rating_number }} @endif"
                                                  class="mat-input-element mat-form-field-autofill-control ng-tns-c70-51 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="br_a" aria-invalid="false" aria-required="false" readonly /><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-51"></span>
                                              </div>

                                            </td>
                                          </tr>
                                          <tr class="ng-tns-c268-42">
                                            <td class="lable_title ng-tns-c268-42 td">
                                              INSURER B : </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-52">
                                                <input matinput="" placeholder="Enter Insurer B Details"
                                                  formcontrolname="insurerB" value=""
                                                  class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-52 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="mat-input-8" data-placeholder="Enter Insurer B Details"
                                                  aria-invalid="false" aria-required="false" autocomplete="off"
                                                  role="combobox" aria-autocomplete="list" aria-expanded="false"
                                                  aria-haspopup="listbox" />
                                                <mat-autocomplete panelwidth="auto" class="mat-autocomplete ng-tns-c70-52">
                                                </mat-autocomplete><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-52"></span>
                                              </div>

                                            </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-53">
                                                <input matinput="" placeholder="Enter Insurer B Details"
                                                  formcontrolname="insNaicNoB" value=""
                                                  class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-53 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="mat-input-9" data-placeholder="Enter Insurer B Details"
                                                  aria-invalid="false" aria-required="false" autocomplete="off"
                                                  role="combobox" aria-autocomplete="list" aria-expanded="false"
                                                  aria-haspopup="listbox" />
                                                <mat-autocomplete panelwidth="auto" class="mat-autocomplete ng-tns-c70-53">
                                                </mat-autocomplete><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-53"></span>
                                              </div>

                                            </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-54">
                                                <input autocomplete="off" matinput="" formcontrolname="insBestRatingB"
                                                  readonly="true" value=""
                                                  class="mat-input-element mat-form-field-autofill-control ng-tns-c70-54 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="mat-input-10" aria-invalid="false" aria-required="false" /><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-54"></span>
                                              </div>

                                            </td>
                                          </tr>
                                          <tr class="ng-tns-c268-42 ">
                                            <td class="lable_title ng-tns-c268-42 td">
                                              INSURER C : </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-55">
                                                <input matinput="" placeholder="Enter Insurer C Details"
                                                  formcontrolname="insurerC" value=""
                                                  class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-55 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="mat-input-11" data-placeholder="Enter Insurer C Details"
                                                  aria-invalid="false" aria-required="false" autocomplete="off"
                                                  role="combobox" aria-autocomplete="list" aria-expanded="false"
                                                  aria-haspopup="listbox" />
                                                <mat-autocomplete panelwidth="auto" class="mat-autocomplete ng-tns-c70-55">
                                                </mat-autocomplete><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-55"></span>
                                              </div>

                                            </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-56">
                                                <input matinput="" placeholder="Enter Insurer C Details"
                                                  formcontrolname="insNaicNoC" value=""
                                                  class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-56 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="mat-input-12" data-placeholder="Enter Insurer C Details"
                                                  aria-invalid="false" aria-required="false" autocomplete="off"
                                                  role="combobox" aria-autocomplete="list" aria-expanded="false"
                                                  aria-haspopup="listbox" />
                                                <mat-autocomplete panelwidth="auto" class="mat-autocomplete ng-tns-c70-56">
                                                </mat-autocomplete><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-56"></span>
                                              </div>

                                            </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-57">
                                                <input autocomplete="off" matinput="" formcontrolname="insBestRatingC"
                                                  readonly="true" value=""
                                                  class="mat-input-element mat-form-field-autofill-control ng-tns-c70-57 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="mat-input-13" aria-invalid="false" aria-required="false" /><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-57"></span>
                                              </div>

                                            </td>
                                          </tr>
                                          <tr class="ng-tns-c268-42">
                                            <td class="lable_title ng-tns-c268-42 td">
                                              INSURER D : </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-58">
                                                <input matinput="" placeholder="Enter Insurer D Details"
                                                  formcontrolname="insurerD" value=""
                                                  class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-58 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="mat-input-14" data-placeholder="Enter Insurer D Details"
                                                  aria-invalid="false" aria-required="false" autocomplete="off"
                                                  role="combobox" aria-autocomplete="list" aria-expanded="false"
                                                  aria-haspopup="listbox" />
                                                <mat-autocomplete panelwidth="auto" class="mat-autocomplete ng-tns-c70-58">
                                                </mat-autocomplete><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-58"></span>
                                              </div>
                                            </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-59">
                                                <input matinput="" placeholder="Enter Insurer D Details"
                                                  formcontrolname="insNaicNoD" value=""
                                                  class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-59 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="mat-input-15" data-placeholder="Enter Insurer D Details"
                                                  aria-invalid="false" aria-required="false" autocomplete="off"
                                                  role="combobox" aria-autocomplete="list" aria-expanded="false"
                                                  aria-haspopup="listbox" />
                                                <mat-autocomplete panelwidth="auto" class="mat-autocomplete ng-tns-c70-59">
                                                </mat-autocomplete><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-59"></span>
                                              </div>

                                            </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-60">
                                                <input autocomplete="off" matinput="" formcontrolname="insBestRatingD"
                                                  readonly="true" value=""
                                                  class="mat-input-element mat-form-field-autofill-control ng-tns-c70-60 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="mat-input-16" aria-invalid="false" aria-required="false" /><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-60"></span>
                                              </div>

                                            </td>
                                          </tr>
                                          <tr class="ng-tns-c268-42">
                                            <td class="lable_title td ng-tns-c268-42">
                                              INSURER E : </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-61">
                                                <input matinput="" placeholder="Enter Insurer E Details"
                                                  formcontrolname="insurerE" value=""
                                                  class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-61 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="mat-input-17" data-placeholder="Enter Insurer E Details"
                                                  aria-invalid="false" aria-required="false" autocomplete="off"
                                                  role="combobox" aria-autocomplete="list" aria-expanded="false"
                                                  aria-haspopup="listbox" />
                                                <mat-autocomplete panelwidth="auto" class="mat-autocomplete ng-tns-c70-61">
                                                </mat-autocomplete><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-61"></span>
                                              </div>

                                            </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-62">
                                                <input matinput="" placeholder="Enter Insurer E Details"
                                                  formcontrolname="insNaicNoE" value=""
                                                  class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-62 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="mat-input-18" data-placeholder="Enter Insurer E Details"
                                                  aria-invalid="false" aria-required="false" autocomplete="off"
                                                  role="combobox" aria-autocomplete="list" aria-expanded="false"
                                                  aria-haspopup="listbox" />
                                                <mat-autocomplete panelwidth="auto" class="mat-autocomplete ng-tns-c70-62">
                                                </mat-autocomplete><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-62"></span>
                                              </div>

                                            </td>
                                            <td class="ng-tns-c268-42 td">

                                              <div class="mat-form-field-infix ng-tns-c70-63">
                                                <input autocomplete="off" matinput="" formcontrolname="insBestRatingE"
                                                  readonly="true" value=""
                                                  class="mat-input-element mat-form-field-autofill-control ng-tns-c70-63 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                  id="mat-input-19" aria-invalid="false" aria-required="false" /><span
                                                  class="mat-form-field-label-wrapper ng-tns-c70-63"></span>
                                              </div>

                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                              </tbody>
                            </table>
                            <div class="p-t-b-10 ng-tns-c268-42"><span class="agenc_sub_titel ng-tns-c268-42"
                                style="float: left;">COVERAGES</span>
                              <div class="clearfix ng-tns-c268-42"></div>
                            </div>

                            <table  width="100%" cellpadding="0" cellspacing="0"
                              class="tftable ng-tns-c268-42">
                              <tbody class="ng-tns-c268-42">
                                <tr class="ng-tns-c268-42">
                                  <td colspan="7" class="ng-tns-c268-42">
                                    <div style="font-family: Arial; font-size: 11px; margin: 2px;"
                                      class="ng-tns-c268-42"> THE POLICIES OF INSURANCE
                                      LISTED BELOW
                                      HAVE BEEN ISSUED TO THE INSURED NAMED ABOVE FOR THE
                                      POLICY
                                      PERIOD INDICATED. NOTWITHSTANDING THIS CERTIFICATE
                                      MAY BE ISSUED
                                      OR MAY PERTAIN, THE INSURANCE AFFORDED BY THE
                                      POLICIES DESCRIBED
                                      HEREIN IS SUBJECT TO ALL THE TERMS, EXCLUSIONS AND
                                      CONDITIONS OF
                                      SUCH POLICIES. AGGREGATE LIMITS SHOWN MAY HAVE BEEN
                                      REDUCED BY
                                      PAID CLAIMS. </div>
                                  </td>
                                </tr>
                                <tr id="scrollToPolicyHeaderTR" class="ng-tns-c268-42">
                                  <td width="3%" class="lable_title ng-tns-c268-42">INSR LTR
                                  </td>
                                  <td width="20%" class="lable_title ng-tns-c268-42">
                                    <div  class="ng-tns-c268-42">TYPE OF
                                      INSURANCE</div>
                                  </td>
                                  <td width="20%" class="lable_title ng-tns-c268-42">
                                    <div  class="ng-tns-c268-42">POLICY NUMBER
                                    </div>
                                  </td>
                                  <td width="10%" class="lable_title ng-tns-c268-42">
                                    <div  class="ng-tns-c268-42">POLICY
                                      EFF<br class="ng-tns-c268-42">DATE
                                      (MM/DD/YYYY)</div>
                                  </td>
                                  <td width="10%" class="lable_title ng-tns-c268-42">
                                    <div  class="ng-tns-c268-42">POLICY
                                      EXP<br class="ng-tns-c268-42">DATE
                                      (MM/DD/YYYY)</div>
                                  </td>
                                  <td width="28%" class="lable_title ng-tns-c268-42">
                                    <div  class="ng-tns-c268-42">LIMITS</div>
                                  </td>
                                </tr>

                                @foreach ($policytypes->whereIn('id', [1,2,5,10]) as $pt)
                                <tr>
                                  <td >
                                    <div>
                                      <span class="mat-form-field-label-wrapper ng-tns-c70-64"></span>
                                    </div>
                                  </td>

                                  <td valign="middle">
                                    <table width="100%" cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td>
                                            {{$pt->type_name}}
                                          </td>
                                        </tr>

                                        @if($pt->type_name == "General Liability")
                                        @foreach ($pt->policies as $pp)

                                          @if( $pp->policy_title == "COMMERCIAL GENERAL LIABILITY")
                                          <tr>
                                            <td>
                                              <table>
                                                <tbody>
                                                  <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" value="7"
                                                        @if(isset( $certPolicy ) )
                                                          {{ $certPolicy->where('policy_id', 7)->first() ? 'checked' : '' }}
                                                          @endif />
                                                          {{ $pp->where('id', 7)->first()->policy_title }}
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" value="8"
                                                          @if(isset( $certPolicy ) )
                                                            {{ $certPolicy->where('policy_id', 8)->first() ? 'checked' : '' }}
                                                          @endif />
                                                          {{ $pp->where('id', 8)->first()->policy_title }}

                                                          <input class="form-check-input" type="checkbox" value="9"
                                                          @if(isset( $certPolicy ) )
                                                            {{ $certPolicy->where('policy_id', 9)->first() ? 'checked' : '' }}
                                                            @endif />
                                                            {{ $pp->where('id', 9)->first()->policy_title }}
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" value="11"
                                                          @if(isset( $certPolicy ) )
                                                            {{ $certPolicy->where('policy_id', 10)->first() ? 'checked' : '' }}
                                                            @endif />
                                                          {{ $pp->where('id', 10)->first()->policy_title }}

                                                        <input class="form-check-input" type="checkbox" value="11"
                                                          @if(isset( $certPolicy ) )
                                                            {{ $certPolicy->where('policy_id', 11)->first() ? 'checked' : '' }}
                                                          @endif />
                                                          {{ $pp->where('id', 11)->first()->policy_title }}
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                          @endif

                                        @endforeach
                                        @endif

                                        @if($pt->type_name == "Auto Liability")
                                        @foreach ($pt->policies as $pp)

                                        @if( $pp->policy_title == "ANY AUTO")
                                        <tr>
                                          <td>
                                            <table>
                                              <tbody>
                                                <tr>
                                                  <td>
                                                      <input class="form-check-input" type="checkbox" value="7"
                                                      @if(isset( $certPolicy ) )
                                                        {{ $certPolicy->where('policy_id', 1)->first() ? 'checked' : '' }}
                                                        @endif />
                                                        {{ $pp->where('id', 1)->first()->policy_title }}

                                                        <input class="form-check-input" type="checkbox" value="8"
                                                        @if(isset( $certPolicy ) )
                                                          {{ $certPolicy->where('policy_id', 2)->first() ? 'checked' : '' }}
                                                        @endif />
                                                        {{ $pp->where('id', 2)->first()->policy_title }}
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                        <input class="form-check-input" type="checkbox" value="9"
                                                        @if(isset( $certPolicy ) )
                                                          {{ $certPolicy->where('policy_id', 3)->first() ? 'checked' : '' }}
                                                          @endif />
                                                          {{ $pp->where('id', 3)->first()->policy_title }}

                                                          <input class="form-check-input" type="checkbox" value="9"
                                                          @if(isset( $certPolicy ) )
                                                            {{ $certPolicy->where('policy_id', 4)->first() ? 'checked' : '' }}
                                                            @endif />
                                                            {{ $pp->where('id', 4)->first()->policy_title }}
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                      <input class="form-check-input" type="checkbox" value="11"
                                                        @if(isset( $certPolicy ) )
                                                          {{ $certPolicy->where('policy_id', 5)->first() ? 'checked' : '' }}
                                                          @endif />
                                                        {{ $pp->where('id', 5)->first()->policy_title }}

                                                      <input class="form-check-input" type="checkbox" value="11"
                                                        @if(isset( $certPolicy ) )
                                                          {{ $certPolicy->where('policy_id', 6)->first() ? 'checked' : '' }}
                                                        @endif />
                                                        {{ $pp->where('id', 6)->first()->policy_title }}
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                        @endif

                                        @endforeach
                                        @endif

                                        @if( $pt->type_name == "Umbrella")
                                        @foreach ($pt->policies as $pp)
                                        <tr >

                                          @if( $pp->policy_title == "UMBRELLA LIAB")

                                          <td>
                                            <table>
                                              <tbody>
                                                <tr>
                                                  <td>
                                                      <input class="form-check-input" type="checkbox" value="14"
                                                       @if(isset( $certPolicy ) )
                                                        {{ $certPolicy->where('policy_id', 14)->first() ? 'checked' : '' }}
                                                        @endif />
                                                        {{ $pp->where('id', 14)->first()->policy_title }}

                                                      <input class="form-check-input" type="checkbox" value="8"
                                                      @if(isset( $certPolicy ) )
                                                        {{ $certPolicy->where('policy_id', 15)->first() ? 'checked' : '' }}
                                                        @endif />
                                                        {{ $pp->where('id', 15)->first()->policy_title }}
                                                  </td>
                                                </tr>

                                                <tr>
                                                  <td>
                                                      <input class="form-check-input" type="checkbox" value="14"
                                                      @if(isset( $certPolicy ) )
                                                        {{ $certPolicy->where('policy_id', 16)->first() ? 'checked' : '' }}
                                                        @endif />
                                                        {{ $pp->where('id', 16)->first()->policy_title }}

                                                    <input class="form-check-input" type="checkbox" value="8"
                                                    @if(isset( $certPolicy ) )
                                                      {{ $certPolicy->where('policy_id', 17)->first() ? 'checked' : '' }}
                                                      @endif />
                                                      {{ $pp->where('id', 17)->first()->policy_title }}
                                                  </td>
                                                </tr>

                                                <tr>
                                                  <td>
                                                      <input class="form-check-input" type="checkbox" value="14"
                                                      @if(isset( $certPolicy ) )
                                                        {{ $certPolicy->where('policy_id', 18)->first() ? 'checked' : '' }}
                                                        @endif />
                                                        {{ $pp->where('id', 18)->first()->policy_title }}

                                                      <input class="form-check-input" type="checkbox" value="8"
                                                      @if(isset( $certPolicy ) )
                                                        {{ $certPolicy->where('policy_id', 19)->first() ? 'checked' : '' }}
                                                        @endif />
                                                        {{ $pp->where('id', 19)->first()->policy_title }}
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>

                                          @endif

                                        </tr>

                                        @endforeach
                                        @endif

                                      </tbody>
                                    </table>
                                  </td>
                                  <td valign="middle">
                                    <div>
                                      <span>
                                        {{!empty($certPolicy) ? $certPolicy->where('policy_type_id', $pt->id)->first()->policy_number?? '' : ''}}
                                      </span>
                                    </div>
                                  </td>
                                  <td valign="middle">
                                    <div>
                                      <span>
                                        {{!empty($certPolicy->where('policy_type_id', $pt->id)->first()->start_date) ? date('Y-m-d', strtotime($certPolicy->where('policy_type_id', $pt->id)->first()->start_date)):''}}
                                      </span>
                                    </div>
                                  </td>
                                  <td valign="middle">
                                    <div>
                                      <span>
                                        {{!empty($certPolicy->where('policy_type_id', $pt->id)->first()->expiry_date)?date('Y-m-d', strtotime($certPolicy->where('policy_type_id', $pt->id)->first()->expiry_date)):''}}
                                      </span>
                                    </div>
                                  </td>
                                  <td valign="top">
                                    <table width="100%" cellpadding="0" cellspacing="0">
                                      <tbody>

                                        @foreach ($pt->policyLimits as $pl)
                                        <tr>
                                          <td>
                                            {{ $pl->coverage_item }}</td>
                                          <td width="40%">
                                            <div>
                                              <span>$&nbsp;
                                                  <span>
                                                    @if(isset($certPolimit)){{$certPolimit->where('policy_limit_id', $pl->id)->first()->amount??0}}@endif
                                                  </span>
                                              </span>
                                            </div>
                                          </td>
                                        </tr>
                                        @endforeach

                                      </tbody>
                                    </table>
                                  </td>
                                </tr>

                                @endforeach
                                {{-- {{$allpolicytypes[0]}} --}}

                                <tr class="ng-tns-c268-42">
                                  <td colspan="7" style="padding: 10px;" class="ng-tns-c268-42">
                                    <div style="font-size: 11px;" class="ng-tns-c268-42">
                                      DESCRIPTION OF OPERATIONS / LOCATIONS / VEHICLES  (Attach ACORD 101, Additional Remarks Schedule, if more space is required) </div>

                                  </td>
                                </tr>

                              </tbody>
                            </table>

                            <table width="100%" cellpadding="0" cellspacing="0"  style="margin-top: 9px;"
                              class="ng-tns-c268-42">
                              <tbody class="ng-tns-c268-42">
                                <tr class="ng-tns-c268-42">
                                  <td style="width: 50%; font-size: 15px; font-weight: bold;" class="ng-tns-c268-42">
                                    CERTIFICATE HOLDER</td>
                                  <td style="width: 50%; font-size: 15px; font-weight: bold;" class="ng-tns-c268-42">
                                    CANCELLATION</td>
                                </tr>
                                <tr class="ng-tns-c268-42">
                                  <td valign="top" colspan="2" class="p-0 ng-tns-c268-42">
                                    <table width="100%" cellpadding="0" cellspacing="0"
                                      class="tftable m-t-b-10 ng-tns-c268-42">
                                      <tbody class="ng-tns-c268-42">
                                        <tr class="ng-tns-c268-42">
                                          <td rowspan="2" width="80%" class="ct_holder ng-tns-c268-42">
                                            President <br />
                                            The Intermodal
                                            Association of North America <br /> 11785
                                            Beltsville Drive
                                            <br /> Suite
                                            1100<br />
                                            Calverton, MD
                                            20705-4048<br />
                                          </td>
                                          <td class="fot_titel ng-tns-c268-42"> SHOULD
                                            ANY OF THE
                                            ABOVE DESCRIBED POLICIES BE CANCELLED
                                            BEFORE THE
                                            EXPIRATION DATE THEREOF, NOTICE WILL BE
                                            DELIVERED IN
                                            ACCORDANCE WITH THE POLICY PROVISIONS.
                                          </td>
                                        </tr>
                                        <tr class="ng-tns-c268-42">
                                          <td class="fot_titel ng-tns-c268-42">
                                            AUTHORIZED
                                            REPRESENTATIVE <textarea cols="38" rows="3" readonly="readonly"
                                              style="vertical-align: middle; margin-left: 10px;"
                                              class="ng-tns-c268-42"></textarea>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                        </form>
                      </div>
                    </div>
                    <div class="rights_reserved ng-tns-c268-42">2006 -2024 ACORD CORPORATION. All rights
                      reserved.</div>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</body>

</html>

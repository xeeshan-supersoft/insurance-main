<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Insurance_data;
use App\Models\Insurance_detail;

class AdminController extends Controller
{
  public function __construct()
  {
    $this->middleware('checkRole:admin');
  }
  public function insurform()
  {
    return view('agent.form');
  }
  public function list()
  {
    return view('agent.formlist');
  }

  public function dashadmin()
  {
    $users = User::all();

    return view('dash', compact('users'));
    // return view('dash');
  }
  public function users()
  {
    // $users = User::all();

    $users = User::with([
      'shippers' => function ($query) {
        $query
          ->select('user_id', 'shipper_address', 'shipper_city','shipper_state','shipper_zip','shipper_cellphone','shipper_extra_email' /* add other shipper columns as needed */)
          ->orderBy('user_id', 'desc');
      },
      'truckers' => function ($query) {
        $query
          ->select('user_id', 'trucker_address', 'trucker_city','trucker_state','trucker_extra_email','trucker_cellphone','trucker_zip' /* add other trucker columns as needed */)
          ->orderBy('user_id', 'desc');
      },
      'freights' => function ($query) {
        $query
          ->select('user_id', 'freight_address', 'freight_city','freight_zip','freight_cellphone','freight_extra_email' ,'freight_state'/* add other freight columns as needed */)
          ->orderBy('user_id', 'desc');
      },
      'agencies' => function ($query) {
        $query
          ->select('user_id', 'agency_address', 'agency_city' ,'agency_zip','agency_cellphone','agency_extra_email','agency_state')
          ->orderBy('user_id', 'desc');
      },
    ])
      ->orderBy('id', 'asc')
      ->get();

    return view('users', compact('users'));
    // return view('users');
  }

  public function insurformsave(request $request)
  {
    // Insert data into the insurance_datas table
    $insuranceData = Insurance_data::create(
      $request->only([
        'Cname',
        'Cadd1',
        'Cadd2',
        'Ccity',
        'Czip',
        'Cstate',
        'Cphone',
        'Cphone2',
        'Conname',
        'phone',
        'fax',
        'email',
        'PC_ids',
        'Iname',
        'Iadd1',
        'Iadd2',
        'Iacity',
        'Izip',
        'Istate',
        'IPhone',
        'IPhone2',
        'insur_a',
        'naic_a',
        'br_a',
        'insur_b',
        'naic_b',
        'br_b',
        'insur_c',
        'naic_c',
        'br_c',
        'insur_d',
        'naic_d',
        'br_d',
        'insur_e',
        'naic_e',
        'br_e',
        'CERTIFICATE_HOLDER',
        'REPRESENTATIVE',
        'AGENCY_CUSTOMER_ID',
        'loc',
        'AGENCY_n',
        'NAMEDINSURED',
        'AGENCY_CUSTOMER_ID3',
        'loc2',
        'addre',
        'CARRIER',
        'addre2',
        'addre3',
        'CARRIER2',
        'CARRIER3',
        'NAIC_CODE',
        'NAIC_CODE2',
        'NAIC_CODE3',
        'EFFECTIVE_DATE',
        'EFFECTIVE_DATE2',
        'FORM_NUMBER',
        'FORM_NUMBER2',
        'FORM_NUMBER3',
        'FORM_TITLE',
        'FORM_TITLE2',
        'FORM_TITLE3',
        'additional',
        'additional2',
        'additional3',
        'EFFECTIVE_DATE3',
        'AGENCY_CUSTOMER_ID2',
        'loc3',
        'AGENCY_n2',
        'AGENCY_n3',
        'NAMEDINSURED2',
        'NAMEDINSURED3',
        'POLICY_NUMBER',
        'POLICY_NUMBER2',
        'POLICY_NUMBER3',
      ])
    );

    // Get the ID of the inserted record in insurance_datas
    $insuranceDataId = $insuranceData->id;
    //dd($insuranceDataId);

    // Build data for insurance_details using the remaining fields in the request
    $insuranceDetailData = [
      'id_isu_data_fk' => $insuranceDataId,
      'gl_pol_num' => $request['gl_pol_num'],
      'gl_pol_eff_date' => $request['gl_pol_eff_date'],
      'gl_pol_exp_date' => $request['gl_pol_exp_date'],
      'COMMERCIAL_GENERAL_LIABILITY' => $request['COMMERCIAL_GENERAL_LIABILITY'],
      'CLAIMS_MADE' => $request['CLAIMS_MADE'],
      'gl_OCCUR' => $request['gl_OCCUR'],
      'gl_DEDUCTIBLE' => $request['gl_DEDUCTIBLE'],
      'gl_DEDUCTIBLE_unit' => $request['gl_DEDUCTIBLE_unit'],
      'gl_agg' => $request['gl_agg'],
      'gl_policy' => $request['gl_policy'],
      'EACH_CCURRENCE' => $request['EACH_CCURRENCE'],
      'gl_PREMISES' => $request['gl_PREMISES'],
      'gl_MED_EXP' => $request['gl_MED_EXP'],
      'gl_ADV_INJURY' => $request['gl_ADV_INJURY'],
      'gl_ga' => $request['gl_ga'],
      'gl_COMP_OP' => $request['gl_COMP_OP'],
      'al_pol_num' => $request['al_pol_num'],
      'al_pol_eff_date' => $request['al_pol_eff_date'],
      'al_pol_exp_date' => $request['al_pol_exp_date'],
      'al_ANY_UTO' => $request['al_ANY_UTO'],
      'al_oao' => $request['al_oao'],
      'al_sau' => $request['al_sau'],
      'al_DEDUCTIBLE_unit' => $request['al_DEDUCTIBLE_unit'],
      'al_DEDUCTIBLE' => $request['al_DEDUCTIBLE'],
      'al_ha' => $request['al_ha'],
      'al_moa' => $request['al_moa'],
      'al_moa2' => $request['al_moa2'],
      'al_bi' => $request['al_bi'],
      'al_bi_aci' => $request['al_bi_aci'],
      'al_prodamg' => $request['al_prodamg'],
      'c_pol_num' => $request['c_pol_num'],
      'c_pol_eff_date' => $request['c_pol_eff_date'],
      'c_pol_exp_date' => $request['c_pol_exp_date'],
      // 'c_VEHICLE_DED_unit' => $request['c_VEHICLE_DED_unit'],
      'c_VEHICLE_DED' => $request['c_VEHICLE_DED'],
      'c_limit_per' => $request['c_limit_per'],
      'fd_pol_num' => $request['fd_pol_num'],
      'fd_pol_eff_date' => $request['fd_pol_eff_date'],
      'fd_pol_exp_date' => $request['fd_pol_exp_date'],
      // 'fd_fdt_unit' => $request['fd_fdt_unit'],
      'fd_fdt' => $request['fd_fdt'],
      'fd_lpt' => $request['fd_lpt'],
      'one_pol_num' => $request['one_pol_num'],
      'one_pol_eff_date' => $request['one_pol_eff_date'],
      'one_pol_exp_date' => $request['one_pol_exp_date'],
      'UMBRELLA_LIAB' => $request['UMBRELLA_LIAB'],
      'CLAIM_MADE' => $request['CLAIM_MADE'],
      'EXCESS_LIAB' => $request['EXCESS_LIAB'],
      'OCCUR_1' => $request['OCCUR_1'],
      'DEDUCTIBLE_unit_1' => $request['DEDUCTIBLE_unit_1'],
      'DEDUCTIBLE_1' => $request['DEDUCTIBLE_1'],
      'RETENTION_unit_1' => $request['RETENTION_unit_1'],
      'RETENTION_1' => $request['RETENTION_1'],
      'EACH_OCCURRENCE' => $request['EACH_OCCURRENCE'],
      'AGGREGATE' => $request['AGGREGATE'],
      'empty1' => $request['empty1'],
      'empty2' => $request['empty2'],
      'wc_pol_num' => $request['wc_pol_num'],
      'wc_pol_eff_date' => $request['wc_pol_eff_date'],
      'qusetion' => $request['qusetion'],
      'If_yes' => $request['If_yes'],
      'wc_sta_lim' => $request['wc_sta_lim'],
      'wc_other' => $request['wc_other'],
      'wc_elea' => $request['wc_elea'],
      'wc_eldeae' => $request['wc_eldeae'],
      'wc_eldpl' => $request['wc_eldpl'],
      'pol_num1' => $request['pol_num1'],
      'pol_eff_date1' => $request['pol_eff_date1'],
      'pol_exp_date1' => $request['pol_exp_date1'],
      'DISEASE_POLICY_LIMIT' => $request['DISEASE_POLICY_LIMIT'],
      'limt_pr_tril' => $request['limt_pr_tril'],
      'pol_num2' => $request['pol_num2'],
      'pol_eff_date2' => $request['pol_eff_date2'],
      'pol_exp_date2' => $request['pol_exp_date2'],
      'DISEASE_POLICY_LIMIT2' => $request['DISEASE_POLICY_LIMIT2'],
      'limt_pr_tril2' => $request['limt_pr_tril2'],
      'checkbox' => $request['checkbox'],
    ];
    //dd($insuranceDetailData);
    // Insert data into the insurance_details table
    $Insurance_detail = Insurance_detail::create($insuranceDetailData);
    //return 'ok';
    return view('agent.pdf', compact('insuranceData', 'Insurance_detail'));
  }
  public function pdf()
  {
    $insuranceData = Insurance_data::first();
    $Insurance_detail = Insurance_detail::first();

    return view('agent.pdf', compact('insuranceData', 'Insurance_detail'));
  }
}

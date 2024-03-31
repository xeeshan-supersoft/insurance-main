<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance_detail extends Model
{
  use HasFactory;
  protected $fillable = [
    'id_isu_data_fk',
    'gl_pol_num',
    'gl_pol_eff_date',
    'gl_pol_exp_date',
    'COMMERCIAL_GENERAL_LIABILITY',
    'CLAIMS_MADE',
    'gl_OCCUR',
    'gl_DEDUCTIBLE',
    'gl_DEDUCTIBLE_unit',
    'gl_agg',
    'gl_policy',
    'EACH_CCURRENCE',
    'gl_PREMISES',
    'gl_MED_EXP',
    'gl_ADV_INJURY',
    'gl_ga',
    'gl_COMP_OP',
    'al_pol_num',
    'al_pol_eff_date',
    'al_pol_exp_date',
    'al_ANY_UTO',
    'al_oao',
    'al_sau',
    'al_DEDUCTIBLE_unit',
    'al_DEDUCTIBLE',
    'al_ha',
    'al_moa',
    'al_moa2',
    'al_bi',
    'al_bi_aci',
    'al_prodamg',
    'c_pol_num',
    'c_pol_eff_date',
    'c_pol_exp_date',
    // 'c_VEHICLE_DED_unit',
    'c_VEHICLE_DED',
    'c_limit_per',
    'fd_pol_num',
    'fd_pol_eff_date',
    'fd_pol_exp_date',
    // 'fd_fdt_unit',
    'fd_fdt',
    'fd_lpt',
    'one_pol_num',
    'one_pol_eff_date',
    'one_pol_exp_date',
    'UMBRELLA_LIAB',
    'CLAIM_MADE',
    'EXCESS_LIAB',
    'OCCUR_1',
    'DEDUCTIBLE_unit_1',
    'DEDUCTIBLE_1',
    'RETENTION_unit_1',
    'RETENTION_1',
    'EACH_OCCURRENCE',
    'AGGREGATE',
    'empty1',
    'empty2',
    'wc_pol_num',
    'wc_pol_eff_date',
    'wc_pol_exp_date',
    'qusetion',
    'If_yes',
    'wc_sta_lim',
    'wc_other',
    'wc_elea',
    'wc_eldeae',
    'wc_eldpl',
    'pol_num1',
    'pol_eff_date1',
    'pol_exp_date1',
    'DISEASE_POLICY_LIMIT',
    'limt_pr_tril',
    'pol_num2',
    'pol_eff_date2',
    'pol_exp_date2',
    'DISEASE_POLICY_LIMIT2',
    'limt_pr_tril2',
    'checkbox',
  ];
  public function insuranceDetails()
  {
      return $this->hasOne(InsuranceDetail::class, 'id_isu_data_fk', 'id');
  }
}
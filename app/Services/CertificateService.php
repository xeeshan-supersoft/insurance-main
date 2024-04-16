<?php

namespace App\Services;

use Auth;
use Carbon\Carbon;
use App\Models\Certificate;
use App\Models\CertificatePolicy;
use App\Models\CertificatePolicyLimit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CertificateService
{
  protected $current_date_time;

  public function __construct()
  {
    $this->current_date_time = Carbon::now()->toDateTimeString();
  }

  public function store(array $certificateData)
  {
    $new_cert = new Certificate;
    $new_cert->client_user_id = $this->driver_id;
    $new_cert->producer_user_id = Auth::user()->id;
    $new_cert->created_at = $this->current_date_time;
    $new_cert->save();

    $cid = $new_cert->id;

    //dd($certificateData);

    foreach ($certificateData['main_policy_sub'] as $k => $v) {
      foreach ($v as $val) {
        $certificatePolicy = new CertificatePolicy;
        $certificatePolicy->certificate_id = $cid;
        $certificatePolicy->policy_type_id = $k;
        $certificatePolicy->policy_id = $val;
        $certificatePolicy->policy_deductible = 0;
        $certificatePolicy->policy_retention = 0;
        $certificatePolicy->is_policy_checked = false;
        $certificatePolicy->is_risk_retention_insured = false;
        $certificatePolicy->is_actual_cash_value = false;
        $certificatePolicy->insurance_provider_code = $certificateData['insurance_provider_code'][$k];
        $certificatePolicy->insurance_provider_id = $certificateData['insurance_provider_id'][0];
        $certificatePolicy->policy_number = $certificateData['main_policy_polnum'][$k];
        $certificatePolicy->issue_date = Carbon::now()->format('Y-m-d');
        $certificatePolicy->start_date = $certificateData['main_policy_eff_date'][$k];
        $certificatePolicy->expiry_date = $certificateData['main_policy_exp_date'][$k];
        $certificatePolicy->save();
      }
    }

    foreach ($certificateData['main_policy_coverage'] as $k => $v) {
      foreach ($certificateData['main_policy_coverage'][$k] as $vv => $val) {
        if (!empty($val)){
          $certificatePolicyLimit = new CertificatePolicyLimit;
          $certificatePolicyLimit->certificate_id = $cid;
          $certificatePolicyLimit->policy_type_id = $k;
          $certificatePolicyLimit->policy_limit_id = $vv;
          $certificatePolicyLimit->amount = $val;
          $certificatePolicyLimit->save();
        }

      }
    }

    return $new_cert;
  }

  public function update(array $certificateData)
  {
    $cert = Certificate::find($certificateData['cert_id']);    
    $cert->updated_at = $this->current_date_time;
    $cert->save();

    foreach ($certificateData['main_policy_sub'] as $k => $v) {
      foreach ($v as $val) {
        $certificatePolicy = CertificatePolicy::find($k);
        $certificatePolicy->certificate_id = $cert->id;
        $certificatePolicy->policy_type_id = $k;
        $certificatePolicy->policy_id = $val;
        $certificatePolicy->policy_deductible = 0;
        $certificatePolicy->policy_retention = 0;
        $certificatePolicy->is_policy_checked = false;
        $certificatePolicy->is_risk_retention_insured = false;
        $certificatePolicy->is_actual_cash_value = false;
        $certificatePolicy->insurance_provider_code = $certificateData['insurance_provider_code'][$k];
        $certificatePolicy->insurance_provider_id = $certificateData['insurance_provider_id'][0];
        $certificatePolicy->policy_number = $certificateData['main_policy_polnum'][$k];
        $certificatePolicy->issue_date = Carbon::now()->format('Y-m-d');
        $certificatePolicy->start_date = $certificateData['main_policy_eff_date'][$k];
        $certificatePolicy->expiry_date = $certificateData['main_policy_exp_date'][$k];
        $certificatePolicy->save();
      }
    }

    foreach ($certificateData['main_policy_coverage'] as $k => $v) {
      foreach ($certificateData['main_policy_coverage'][$k] as $vv => $val) {
        if (!empty($val)){
          $certificatePolicyLimit = CertificatePolicyLimit::find($k);
          $certificatePolicyLimit->certificate_id = $cert->id;
          $certificatePolicyLimit->policy_type_id = $k;
          $certificatePolicyLimit->policy_limit_id = $vv;
          $certificatePolicyLimit->amount = $val;
          $certificatePolicyLimit->save();
        }

      }
    }
  }
}

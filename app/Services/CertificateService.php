<?php

namespace App\Services;

use App\Models\Certificate;
use App\Models\CertificatePolicy;
use App\Models\CertificatePolicyLimit;
use Carbon\Carbon;

class CertificateService
{
  protected $current_date_time;

  public function __construct()
  {
    $this->current_date_time = Carbon::now()->toDateTimeString();
  }

  public function store(array $certificateData)
  {
    dd($certificateData['request']);
    $new_cert = new Certificate;
    $new_cert->client_user_id = $certificateData->client_user_id;
    $new_cert->producer_user_id = $certificateData->producer_user_id;
    $new_cert->created_at = $this->current_date_time;
    $new_cert->save();

    $cid = $new_cert->id;

    return $new_cert;
  }

  public function update(array $certificateData, Certificate $certificate)
  {
    // $certificate;
  }
}

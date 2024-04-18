<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyInfos extends Model
{
  use HasFactory;

  protected $table = 'agency_infos';
  protected $fillable = [
    'user_id',
    'agency_name',
    'agency_address',
    'agency_address2',
    'agency_city',
    'agency_state',
    'agency_zip',
    'agency_cellphone',
    'agency_extra_email',
    'agency_fax',
    'producer_customer_number',
    'is_active',
  ];

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}

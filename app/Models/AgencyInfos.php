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
    'agency_address',
    'agency_city',
    'agency_state',
    'agency_zip',
    'agency_cellphone',
    'agency_extra_email',
  ];

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}

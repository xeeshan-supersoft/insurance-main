<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipperInfos extends Model
{
  use HasFactory;

  protected $table = 'shipper_infos';

  protected $fillable = [
    'user_id',
    'shipper_address',
    'shipper_city',
    'shipper_state',
    'shipper_zip',
    'shipper_cellphone',
    'shipper_extra_email',
  ];

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}

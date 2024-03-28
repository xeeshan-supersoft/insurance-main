<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckerInfos extends Model
{
  use HasFactory;

  protected $table = 'trucker_infos';

  protected $fillable = [
    'user_id',
    'trucker_address',
    'trucker_city',
    'trucker_state',
    'trucker_zip',
    'trucker_cellphone',
    'trucker_extra_email',
    'trucker_name',
    'trucker_country',
    'trucker_address2',
  ];

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}

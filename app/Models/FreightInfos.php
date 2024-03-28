<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class FreightInfos extends Model
{
  use HasFactory;

  protected $table = 'freight_infos';

  protected $fillable = [
    'user_id',
    'freight_address',
    'freight_city',
    'freight_state',
    'freight_zip',
    'freight_cellphone',
    'freight_extra_email',
  ];

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverDetail extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'address',
    'state',
    'city',
    'zip',
    'contact_info',
    'license_number',
    'license_expiry_date',
    'license_type',
    'years_of_experience',
    'vehicle_registration_number',
    'vehicle_make',
    'vehicle_model',
    'vehicle_year',
    'vehicle_capacity',
    'vehicle_status',
    'mc_number',
    'status',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}

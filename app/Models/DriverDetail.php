<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverDetail extends Model
{
  use HasFactory;


  protected $fillable = [
    'user_id',
    'name',
    'mname',
    'lname',
    'suffix',
    'salutation',
    'title',
    'prefix',
    'websit',
    'tax',
    'scac',
    'usdot',    
    'address',
    'address2',
    'state',
    'city',
    'zip',
    'cellphone',
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
    'extra_email',
    'is_active',
    'image_path'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}

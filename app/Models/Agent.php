<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
  use HasFactory;

  protected $fillable = ['address', 'phone', 'fax', 'producer_customer_number', 'user_id'];

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}

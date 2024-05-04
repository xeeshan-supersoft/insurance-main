<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  use HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = ['name', 'email', 'role', 'password', 'email_verified_at', 'remember_token'];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = ['password', 'remember_token'];

  /**
   * Get the attributes that should be cast.
   *
   * @return array<string, string>
   */
  protected function casts(): array
  {
    return [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
    ];
  }

  public function certificatesAsAgent()
  {
    return $this->hasMany(Certificate::class, 'producer_user_id');
  }

  public function certificatesAsDriver()
  {
    return $this->hasMany(Certificate::class, 'client_user_id');
  }

  public function agents()
  {
    return $this->belongsToMany(User::class, 'agent_driver', 'agent_id', 'driver_id');
  }

  public function drivers()
  {
    return $this->belongsToMany(User::class, 'agent_driver', 'driver_id', 'agent_id');
  }

  public function ships()
  {
    return $this->belongsToMany(User::class, 'agent_driver', 'agent_id', 'driver_id');
  }

  public function hasRole($role)
  {
    return $this->role === $role;
  }

  public function shippers()
  {
    return $this->hasMany(ShipperInfos::class, 'user_id');
  }

  public function truckers()
  {
    return $this->hasMany(DriverDetail::class, 'user_id');
  }

  public function freights()
  {
    return $this->hasMany(DriverDetail::class, 'user_id');
  }

  public function agencies()
  {
    return $this->hasMany(AgencyInfos::class, 'user_id');
  }
}

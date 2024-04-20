<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentDriver extends Model
{
    use HasFactory;

    protected $table = 'agent_driver';

    protected $fillable = [
      'agent_id',
      'driver_id'
    ];

    public function agent()
    {
      return $this->belongsTo(User::class, 'agent_id');
    }

    public function driver()
    {
      return $this->belongsTo(User::class, 'driver_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examn extends Model
{
    use HasFactory;

    public function appointmens()
    {
      return $this->belongsToMany(Appoinment::class);
    }
}

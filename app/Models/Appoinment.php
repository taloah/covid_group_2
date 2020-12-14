<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    use HasFactory;
    
    public function appointmens_users()
    {
      return $this->hasMany(User::class);
    }
    
    public function appointmens_doctor()
    {
      return $this->hasMany(Doctor::class);
    }
    public function appointmens_patients()
    {
      return $this->hasMany(Patient::class);
    }
    
    public function appointmens_examns()
    {
      return $this->hasMany(Examn::class);
    }
}

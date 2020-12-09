<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor_Speciality extends Model
{
  use HasFactory;
  protected $fillable =
  [
      'Doctor','Speciality',
  ];
  protected $table = 'doctor_speciality';
  protected $primarykey = 'id';
  
  public function doctor()
  {
    return $this->belongsTo(Doctor::class);
  }
  public function speciality()
  {
    return $this->hasMany(Doctor_Speciality::class);
  }
}

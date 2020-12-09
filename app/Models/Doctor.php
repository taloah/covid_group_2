<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
  use HasFactory;
  protected $fillable =
  [
      'Name', 'Speciality', 'User',
  ];
  protected $table = 'doctor';
  protected $primarykey = 'id';

  public function appoinment()
  {
    return $this->belongsTo(Appoinments::class);
  }
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function doctor_speciality()
  {
    return $this->hasMany(Doctor_Speciality::class);
  }
}

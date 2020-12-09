<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoinments extends Model
{
  use HasFactory;
  
  protected $fillable = [
    'Doctor', 'Patient', 
    'Date', 'Hour_Appoinment', 
    'Appoint_user', 'Attended', 
    'Examns', 'Recipe_Details', 
  ];
  
  protected $table = 'appoinment';
  protected $primarykey = 'id';

  public function doctor()
  {
    return $this->hasMany(Doctor::class);
  }
  public function patient()
  {
    return $this->hasMany(Patient::class);  
  }
  public function user()
  {
    return $this->hasMany(User::class);
  }
  public function examns()
  {
    return $this->hasMany(Examns::class);
  }
  public function recipe()
  {
    return $this->belongsTo(Recipe::class);
  }

}

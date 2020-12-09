<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  use HasFactory;

  protected $fillable = [
    'Names', 'Last Names', 
    'Phone', 'Age', 
    'Diabetes', 'Hypertension', 
    'IESS', 'SIZE', 
    'WEIGHT', 'VITAL SIGNS', 
    'TAKE_MEDICINE'
  ];
  
  protected $table = 'patient';
  protected $primarykey = 'id';

  public function user()
  {
    return $this->hasOne(User::class);
  }

  public function appoinment()
  {
    return $this->belongsTo(Appoinments::class);
  }
  
}


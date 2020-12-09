<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
  use HasFactory;
  protected $fillable =
  [
      'Name', 'Description',
  ];
  protected $table = 'speciality';
  protected $primarykey = 'id';
  
  public function doctor_speciality()
  {
    return $this->belongsTo(Doctor_Speciality::class);
  }
}

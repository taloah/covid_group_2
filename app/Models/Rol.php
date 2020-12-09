<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
  use HasFactory;

  protected $fillable = 
  [
    'name_group'
  ];
  
  protected $table = 'rol';
  protected $primarykey = 'id'; 
  
  public function users()
  {
    return $this->hasMany(User::class);
  }
}

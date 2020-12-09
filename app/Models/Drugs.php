<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drugs extends Model
{
  use HasFactory;
  protected $fillable =
  [
    'Drug', 'Description',
  ];
  
  protected $table = 'drugs';
  protected $primarykey = 'id';

  public function recipe_details()
  {
    return $this->hasOne(Recipe_Details::class);
  }
}

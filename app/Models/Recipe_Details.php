<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe_Details extends Model
{
  use HasFactory;
  
  protected $fillable =
    [
      'Details', 'Drug', 'Prescription',
    ];
  protected $table = 'recipe_details';
  protected $primarykey = 'id';

  public function recipe()
  {
    return $this->hasMany(Recipe::class);
  }
  public function drugs()
  {
    return $this->belongsTo(Drugs::class);
  }  
}

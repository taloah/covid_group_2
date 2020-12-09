<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
  use HasFactory;
  protected $fillable =
  [
      'Details',
  ];
  protected $table = 'recipe';
  protected $primarykey = 'id';

  public function recipe_details()
  {
    return $this->belongsTo(Recipe_Details::class);
  }

}

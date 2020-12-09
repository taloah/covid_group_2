<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examns extends Model
{
  use HasFactory;
  protected $fillable =
  [
      'Name', 'Description', 'Price',
  ];
  protected $table = 'examns';
  protected $primarykey = 'id';

  public function appoinment()
  {
    return $this->belongsTo(Appoinments::class);
  }
}

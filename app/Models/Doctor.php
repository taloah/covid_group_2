<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'about'];

    protected $table = 'doctors';

    public function specialities()
    {
      return $this->belongsToMany(Speciality::class);
    }

    public function appointmens_doctor()
    {
      return $this->belongsToMany(Appoinment::class);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DoctorSpecialityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('doctor_speciality', function (Blueprint $table) {
        //$table->charset = 'utf8mb4';
        //$table->collation = 'utf8mb4_unicode_ci';
        $table->id();
        $table->unsignedBigInteger('doctor_id');
        $table->unsignedBigInteger('speciality_id'); 
        
        //$table->foreign('doctor_id')->references('id')->on('doctor')->onDelete('cascade');
        //$table->foreign('speciality_id')->references('id')->on('speciality')->onDelete('cascade');  
      }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('doctor_speciality');
    }
}

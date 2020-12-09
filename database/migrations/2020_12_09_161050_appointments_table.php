<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
      Schema::create('appoinments', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('doctor_id');
        $table->unsignedBigInteger('patient_id');
        $table->date('date');
        $table->dateTime('hour_appointment');
        $table->boolean('attended');
        $table->unsignedBigInteger('examns_id');
        $table->text('recipe_details_');


      });
      Schema::table('appoinments', function (Blueprint $table) {
        $table->foreign('doctor_id')->references('id')->on('doctor');
        $table->foreign('patient_id')->references('id')->on('patient');
        //$table->foreign('examns_id')->references('id')->on('examns')->onDelete('cascade');
        $table->foreign('id')->references('id')->on('users');
});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('appoinments'); 
    }
}

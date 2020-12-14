<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConstraintsAppointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('appoinments', function(Blueprint $table){
        
          $table->bigInteger('doctor_id')->unsigned()->nullable()->after('id');
          $table->bigInteger('patient_id')->unsigned()->nullable()->after('doctor_id');
          $table->bigInteger('examns_id')->unsigned()->nullable()->after('patient_id');
          $table->bigInteger('user_id')->unsigned()->nullable()->after('examns_id');

          $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('set null')->onUpdate('cascade');
          $table->foreign('patient_id')->references('id')->on('patients')->onDelete('set null');
          $table->foreign('examns_id')->references('id')->on('examns')->onDelete('set null')->onUpdate('cascade');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

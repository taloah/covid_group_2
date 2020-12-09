<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('patient', function (Blueprint $table) {
        $table->id();
        $table->string('name', 50);
        $table->string('last names', 50);
        $table->string('phone', 20);
        $table->integer('age');
        $table->text('allergies');
        $table->boolean('diabetes');
        $table->boolean('hypertension');
        $table->boolean('IEES');
        $table->double('size', 4, 1);
        $table->double('weight', 4, 1);
        $table->text('vital_signs');
        $table->boolean('take_medicine');
        $table->text('description_medicine');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient');

    }
}

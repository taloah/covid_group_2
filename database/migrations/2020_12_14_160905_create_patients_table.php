<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('names');
            $table->string('last_names');
            $table->string('phone');
            $table->integer('age');
            $table->text('allergies')->nullable();
            $table->boolean('diabetes');            
            $table->boolean('hypertension');
            $table->string('IESS');
            $table->double('size', 4, 1);
            $table->double('weight', 4, 1);
            $table->text('vital_signs');
            $table->boolean('take_medicine');
            $table->text('description_medicine')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}

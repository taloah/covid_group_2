<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecipeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('recipe_details', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('drug_id');
       $table->text('prescription'); 
     // $table->foreign('drug_id')->references('id')->on('drugs');
      });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('recipe_details');
    }
}

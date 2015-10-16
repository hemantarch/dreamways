<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('suggestions', function (Blueprint $table) {
            
          $table->increments('id');
          $table->integer('user_id');
          $table->string('name');
          $table->string('type');
          $table->text('description');
          $table->string('lat');
          $table->string('lang');
          $table->string('formatted_address');
          $table->string('country');
          $table->string('state');
          $table->string('city');
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
        //
    }
}

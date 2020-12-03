<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('profiles', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user');
          $table->string('first_name')->nullable();
          $table->string('last_name')->nullable();
          $table->date('date_of_birth')->nullable();
          $table->string('gender')->nullable();
          $table->text('description')->nullable();
          $table->string('expected_salary')->nullable();
          $table->string('expected_type')->nullable();
          $table->string('expected_countries')->nullable();
          $table->string('expected_states')->nullable();
          $table->string('expected_cities')->nullable();
          $table->string('expected_title')->nullable();
          $table->string('skills')->nullable();
          $table->string('avatar')->nullable();
          $table->string('resume')->nullable();

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
      Schema::dropIfExists('profiles');
    }
}

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
          $table->text('description')->nullable();
          $table->string('expect_salary')->nullable();
          $table->string('expect_type')->nullable();
          $table->string('expect_countries')->nullable();
          $table->string('expect_states')->nullable();
          $table->string('expect_cities')->nullable();
          $table->string('expect_title')->nullable();
          $table->string('skills')->nullable();
          $table->string('avatar')->nullable();
          $table->string('resume')->nullable();
          $table->string('transcript')->nullable();
          $table->string('visa')->nullable();

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

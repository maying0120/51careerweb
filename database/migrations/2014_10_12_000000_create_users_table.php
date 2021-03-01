<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('status')->default(0);
        $table->string('name');
        $table->string('email')->unique();
        $table->string('phone')->unique();
        $table->string('password');
        $table->string('first_name')->nullable();
        $table->string('last_name')->nullable();
        $table->date('date_of_birth')->nullable();
        $table->string('gender')->nullable();
        $table->string('recommend_job')->nullable();
        $table->boolean('profile_complete')->nullable();
        $table->boolean('receive_notification')->default(1);
        $table->boolean('receive_promotion')->default(1);
        $table->rememberToken();
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
      Schema::dropIfExists('users');
    }
}

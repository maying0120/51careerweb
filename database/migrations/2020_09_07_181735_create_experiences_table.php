<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('experiences', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user');
        $table->string('project')->nullable();
        $table->string('company')->nullable();
        $table->boolean('present')->nullable();
        $table->string('title');
        $table->date('start_date');
        $table->date('end_date')->nullable();
        $table->text('description');
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
      Schema::dropIfExists('experiences');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('educations', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user');
        $table->string('school');
        $table->string('degree');
        $table->string('major');
        $table->date('start_date');
        $table->date('end_date');
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
      Schema::dropIfExists('educations');
    }
}

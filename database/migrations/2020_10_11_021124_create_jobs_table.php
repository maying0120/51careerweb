<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position');
            $table->string('salary');
            $table->string('company_size');
            $table->string('company');
            $table->date('start_time');
            $table->date('end_time');
            $table->date('hire_time');
            $table->string('major');
            $table->string('visa_status');
            $table->string('english_level');
            $table->string('skill');
            $table->string('industry');
            $table->string('exp_level');
            $table->date('expire_time');
            $table->text('description');
            $table->text('detail');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('job_type');
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
        Schema::dropIfExists('jobs');
    }
}

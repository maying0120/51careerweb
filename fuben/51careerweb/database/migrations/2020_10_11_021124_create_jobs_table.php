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
            $table->varchar('position');
            $table->varchar('country');
            $table->varchar('salary');
            $table->varchar('company_size');
            $table->varchar('company');
            $table->date('start_time');
            $table->date('end_time');
            $table->date('hire_time');
            $table->varchar('major');
            $table->varchar('visa_status');
            $table->varchar('english_level');
            $table->varchar('skill');
            $table->datetime('updated_at');
            $table->datetime('created_at');
            $table->varchar('industry');
            $table->varchar('exp_level');
            $table->date('expire_time');
            $table->text('description');
            $table->date('detail');
            $table->varchar('country');
            $table->varchar('state');
            $table->varchar('city');
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

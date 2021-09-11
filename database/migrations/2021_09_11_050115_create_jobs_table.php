<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->bigInteger('corp_id')->unsigned();
            $table->foreign('corp_id')->references('id')->on('corp')->onDelete('cascade');
            $table->text('description');
            $table->string('position');
            $table->string('last_education');
            $table->string('job_type');
            $table->string('job_category');
            $table->date('deadline');
            $table->string('provinces');
            $table->string('city');
            $table->double('salary_range');
            $table->integer('kuota');
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
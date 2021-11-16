<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTipeCatJobsToJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->bigInteger('job_type_id')->unsigned();
            $table->foreign('job_type_id')->references('id')->on('job_types')->onUpdate('cascade')->onDelete('cascade');

            $table->bigInteger('job_cat_id')->unsigned();
            $table->foreign('job_cat_id')->references('id')->on('job_category')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            //
        });
    }
}

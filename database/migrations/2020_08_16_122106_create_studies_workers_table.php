<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiosTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies_workers', function (Blueprint $table) {
            $table->bigInteger('job_profiles_id')->unsigned();
            $table->bigInteger('studies_id')->unsigned();
            $table->foreign('job_profiles_id')->references('id')->on('job_profiles');
            $table->foreign('studies_id')->references('id')->on('studies');
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
        Schema::dropIfExists('studies_workers');
    }
}

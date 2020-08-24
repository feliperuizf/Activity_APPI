<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->string('lastname',60);
            $table->string('email',100)->unique();
            $table->bigInteger('Telephone');
            $table->string('adress',100);
            $table->bigInteger('id_availabilities_status')->unsigned();
            $table->foreign('id_availabilities_status')->references('id')->on('availabilities_status');
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
        Schema::dropIfExists('workers');
    }
}

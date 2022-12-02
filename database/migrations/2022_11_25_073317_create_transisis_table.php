<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transisis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bahasa_osing_id');
            
            $table->unsignedBigInteger('bahasa_indonesia_id');
            
            $table->timestamps();

            // $table->foreign('bahasa_osing_id')->references('id')->on('bahasa_osings');
            // $table->foreign('bahasa_indonesia_id')->references('id')->on('bahasa_indonesias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transisis');
    }
};

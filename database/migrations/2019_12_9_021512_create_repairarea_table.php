<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair-area', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas');

            $table->unsignedBigInteger('repairman_id');
            $table->foreign('repairman_id')->references('id')->on('repairmen');

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
        Schema::dropIfExists('repair-area');
    }
}

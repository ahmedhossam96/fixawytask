<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service-area', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas');

            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');

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
        Schema::dropIfExists('service-area');
    }
}

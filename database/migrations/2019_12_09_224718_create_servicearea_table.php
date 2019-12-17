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
        Schema::create('servicearea', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->bigIncrements('id');
            

            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas');

            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');

            $table->bigInteger('price');
            
            $table->timestamps();
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('servicearea');
        Schema::enableForeignKeyConstraints();
    }
}

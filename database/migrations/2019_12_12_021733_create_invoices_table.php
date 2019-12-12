<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('time');
            $table->bigInteger('price');
            $table->bigInteger('total');


            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');

            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');

            
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
        Schema::dropIfExists('invoices');
    }
}

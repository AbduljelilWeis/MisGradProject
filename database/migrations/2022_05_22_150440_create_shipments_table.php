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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->date('shipping_date');
            $table->string('shipment_number');
            $table->foreignId('shipment_status')->references('id')->on('shipment_statuses')->onDelete('cascade');
            $table->boolean('is_delivered');
            $table->double('shipping_cost');
            $table->boolean('is_money_transferred');
            $table->double('transferred_sum');
            $table->date('money_transferring_date');
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
        Schema::dropIfExists('shipments');
    }
};

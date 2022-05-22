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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('order_date');
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->double('order_total_price');
            $table->text('comments');
            $table->foreignId('order_status_id')->references('id')->on('order_statuses')->onDelete('cascade');
            $table->boolean('is_shipped');
            $table->foreignId('shipping_company_id')->nullable()->references('id')->on('shipping_companies')->onDelete('cascade');
            $table->foreignId('shipment_id')->nullable()->references('id')->on('shipments')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};

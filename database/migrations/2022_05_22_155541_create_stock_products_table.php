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
        Schema::create('stock_products', function (Blueprint $table) {
            $table->id();
            $table->uuid('qr_code')->unique();
            $table->foreignId('variation_id')->references('id')->on('product_variations')->onDelete('cascade');
            $table->foreignId('product_id')->references('id')->on('Products')->onDelete('cascade');
            $table->integer('quantity');
            $table->string('product_variation_image_path');
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
        Schema::dropIfExists('stock_products');
    }
};

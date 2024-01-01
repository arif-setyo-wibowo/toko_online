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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->foreignUuid('transaction_id')->references('id')->on('transaction_headers');
            $table->foreignUuid('product_id')->references('id')->on('products');
            $table->uuid('variant_id')->primary();
            $table->integer('quantity');
            $table->integer('price');
            $table->foreignUuid('shipment_id')->references('id')->on('shipments');
            $table->string('status', 255);
            $table->string('promo_name', 255);
            $table->integer('discount');
            $table->integer('total_paid');
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
        Schema::dropIfExists('transaction_details');
    }
};

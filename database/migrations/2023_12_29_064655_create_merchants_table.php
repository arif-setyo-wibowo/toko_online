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
        Schema::create('merchants', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->references('id')->on('users');
            $table->string('name', 255);
            $table->string('phone', 255);
            $table->string('status', 255);
            $table->string('iamge', 255);
            $table->string('catch_prace', 255);
            $table->string('process_time', 255);
            $table->string('operational_time', 255);
            $table->string('banner_image', 255);
            $table->string('description', 255);
            $table->integer('full_description');
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
        Schema::dropIfExists('merchants');
    }
};

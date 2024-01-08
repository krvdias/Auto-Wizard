<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id('p_id');
            $table->string('p_location');
            $table->unsignedBigInteger('off_id');
            $table->foreign('off_id')->references('off_id')->on('officers');
            $table->unsignedBigInteger('v_id');
            $table->foreign('v_id')->references('v_id')->on('vehicles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processes');
    }
};

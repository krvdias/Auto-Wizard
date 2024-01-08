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
        Schema::create('services', function (Blueprint $table) {
            $table->id('s_id');
            $table->string('s_type');
            $table->time('s_hours');
            $table->double('service_charge');
            $table->integer('fill_quantity');
            $table->double('s_location');
            $table->char('appointment_id',5);
            $table->unsignedBigInteger('cus_id');
            $table->foreign('cus_id')->references('cus_id')->on('customers');
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
        Schema::dropIfExists('services');
    }
};

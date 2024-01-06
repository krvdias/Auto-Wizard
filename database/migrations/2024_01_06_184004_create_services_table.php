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
            $table->increments('s_id');
            $table->string('s_type');
            $table->time('s_hours');
            $table->double('service_charge');
            $table->integer('fill_quantity');
            $table->double('s_location');
            $table->id('appointment_id');
            $table->foreignId('cus_id')->constrained();
            $table->foreignId('off_id')->constrained();
            $table->foreignId('v_id')->constrained();
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

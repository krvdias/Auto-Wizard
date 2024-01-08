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
        Schema::create('items', function (Blueprint $table) {
            $table->id('i_id');
            $table->string('i_name');
            $table->double('unit_price');
            $table->unsignedBigInteger('st_id');
            $table->foreign('st_id')->references('st_id')->on('stocks');
            $table->unsignedBigInteger('v_id');
            $table->foreign('v_id')->references('v_id')->on('vehicles');
            $table->unsignedBigInteger('i_item_id');
            $table->foreign('i_item_id')->references('i_item_id')->on('invoice_items');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};

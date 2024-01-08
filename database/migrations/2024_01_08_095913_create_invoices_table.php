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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('in_id');
            $table->date('in_date');
            $table->double('total');
            $table->unsignedBigInteger('s_id');
            $table->foreign('s_id')->references('s_id')->on('services');
            $table->unsignedBigInteger('pay_id');
            $table->foreign('pay_id')->references('pay_id')->on('payments');
            $table->unsignedBigInteger('cus_id');
            $table->foreign('cus_id')->references('cus_id')->on('customers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};

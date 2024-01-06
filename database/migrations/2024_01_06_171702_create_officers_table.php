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
        Schema::create('officers', function (Blueprint $table) {
            $table->increments('off_id');
            $table->char('off_type',3);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('off_address');
            $table->char('off_mobile',10);
            $table->char('off_email',30)->nullable();
            $table->date('off_dob')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('officers');
    }
};

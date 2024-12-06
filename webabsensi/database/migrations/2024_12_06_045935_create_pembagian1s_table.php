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
        Schema::create('pembagian1s', function (Blueprint $table) {
            $table->id('pembagian1_id')->primary();  
            $table->string('pembagian1_nama', 100)->nullable();
            $table->string('pembagian1_ket')->default(''); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembagian1s');
    }
};

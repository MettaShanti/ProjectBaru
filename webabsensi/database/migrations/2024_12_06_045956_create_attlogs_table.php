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
        Schema::create('attlogs', function (Blueprint $table) {
            $table->id();
            $table->string('sn', 30);
            $table->dateTime('scan_date');
            $table->string('pin', 32);
            $table->integer('verifymode');
            $table->integer('inoutmode')->default(0);
            $table->integer('reserved')->default(0);
            $table->integer('work_code')->default(0);
            $table->string('att_id', 50)->default(0);
            $table->primary(['sn', 'scan_date', 'pin']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attlogs');
    }
};

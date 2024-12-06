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
        Schema::create('absenreports', function (Blueprint $table) {
            $table->integer('pegawai_id');
            $table->string('Pin', 32)->index();
            $table->string('Nip', 30)->nullable();
            $table->string('Nama', 50)->default('')->index();
            $table->string('Jabatan', 50)->default('')->index();
            $table->string('Departemen', 50)->default('')->index();
            $table->string('Divisi', 50)->default('');
            $table->string('Tanggal', 10)->default('')->index();  
            $table->string('Bulan', 2)->default('')->index();     
            $table->string('Hari', 10)->default('')->index();     
            $table->string('Scan_awal', 50)->default('')->index();
            $table->string('Scan_akhir', 50)->default('')->index();
            $table->string('Status', 50)->default('Tidak Hadir')->index();
            $table->string('Jam_Kerja', 50)->default('');
            $table->timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absenreports');
    }
};

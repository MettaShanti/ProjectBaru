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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id('pegawai_id')->primary()->default(0);
            $table->string('pegawai_pin', 32)->unique();
            $table->string('pegawai_nip', 30)->nullable();
            $table->string('pegawai_nama');
            $table->string('pegawai_alias', 50)->nullable();
            $table->string('pegawai_pwd', 10)->default(0);
            $table->string('pegawai_rfid', 32)->default(0);
            $table->string('pegawai_privilege', 50)->default(0);
            $table->string('pegawai_telp', 20)->nullable();
            $table->tinyInteger('pegawai_status')->default(1);
            $table->string('tempat_lahir', 50)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->integer('pembagian1_id')->default(0);
            $table->integer('pembagian2_id')->default(0);
            $table->integer('pembagian3_id')->default(0);
            $table->date('tgl_mulai_kerja')->nullable();
            $table->date('tgl_resign')->nullable();
            $table->tinyInteger('gender')->default(1);
            $table->date('tgl_masuk_pertama')->nullable();
            $table->string('photo_path')->default('');
            $table->mediumText('tmp_img')->nullable();
            $table->string('nama_bank', 50)->default('');
            $table->string('nama_rek', 100)->default('');
            $table->string('no_rek', 20)->default('');
            $table->string('password_fio_desktop', 6)->default('000000');
            $table->tinyInteger('status_login_fio_desktop')->default(0);
            $table->integer('new_pegawai_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};

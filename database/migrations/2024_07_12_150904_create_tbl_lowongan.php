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
        Schema::create('tbl_lowongan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('posisi');
            $table->string('lokasi');
            $table->string('waktu_kerja');
            $table->string('gaji');
            $table->date('dibuka');
            $table->date('ditutup');
            $table->text('job_deskripsi');
            $table->text('info_perusahaan');
            $table->text('tanggung_jawab');
            $table->text('kualifikasi');
            $table->integer('dibutuhkan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_lowongan');
    }
};

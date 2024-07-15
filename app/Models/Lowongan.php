<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'tbl_lowongan';

    protected $fillable = [
        'nama_perusahaan',
        'posisi',
        'lokasi',
        'waktu_kerja',
        'gaji',
        'dibuka',
        'ditutup',
        'job_deskripsi',
        'info_perusahaan',
        'tanggung_jawab',
        'kualifikasi',
        'dibutuhkan',
        'email',
        'web'
    ];
}

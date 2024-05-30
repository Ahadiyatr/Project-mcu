<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datakaryawan extends Model
{
    use HasFactory;

    protected $table = "dt_karyawan";
    protected $fillable =
    [
    'id',
    'nik_karyawan',
    'nama_karyawan',
    'perusahaan_id',
    'departemen_id',
    'jabatan_id',
    'jenis_kelamin',
    'tanggal_lhr'
    ];
}

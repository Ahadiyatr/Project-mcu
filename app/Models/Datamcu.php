<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Datamcu extends Model
{
    use HasFactory;

    protected $table = 'datamcu';
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'no_mcu',
        'nama_karyawan',
        'nik_karyawan',
        'perusahaan',
        'departemen_id',
        'jabatan_id',
        'jenis_kelamin',
        'umur',
        'tempat_mcu',
        'status_mcu',
        'tanggal_mcu',
        'sistole',
        'diastole',
        'nadi',
        'tb',
        'bb',
        'bmi',
        'hb',
        'cl',
        'trig',
        'gdp',
        'au',
        'ur',
        'cre',
        'sgot',
        'sgpt',
        'ablab',
        'urin',
        'urin_t',
        'narkoba',
        'mata',
        'gigimulut',
        'hemoroid',
        'ablain',
        'ablain',
        'spiro_o',
        'spiro_r',
        'audi_kanan',
        'audi_kiri',
        'created_at',
        'update_at'
    ];

    public function departemen(){
        return $this->belongsTo(Departemen::class);
    }

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }
}

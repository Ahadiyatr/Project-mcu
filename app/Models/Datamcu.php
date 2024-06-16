<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Datamcu extends Model
{
    use HasFactory;

    protected $table = 'mcu_data';
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'no_mcu',
        'karyawan_id',
        'tmptmcu_id',
        'tempat_mcu',
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

    // Definisikan relasi ke model Datkaryawan
    public function datakaryawan()
    {
        return $this->belongsTo(Datakaryawan::class, 'karyawan_id');
    }

    public function tempatmcu()
    {
        return $this->belongsTo(Tempatmcu::class, 'tmptmcu_id');
    }

    // public function departemen(){
    //     return $this->belongsTo(Departemen::class);
    // }

    // public function jabatan(){
    //     return $this->belongsTo(Jabatan::class);
    // }

    protected $guarded = [];
}

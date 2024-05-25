<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Insert extends Model
{
    use HasFactory;
    protected $table = "mcu_detail";
    protected $primarykey = "id";
    protected $fillable =
    [
        'id',
        'no_mcu',
        'nama_karyawan',
        'perusahaan',
        'nama_departemen',
        'jabatan_id',
        'jenis_kelamin',
        'tempat_mcu',
        'status_mcu',
        'tanggal_mcu'
    ];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }

}

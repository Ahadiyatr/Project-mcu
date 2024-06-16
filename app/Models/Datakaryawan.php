<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datakaryawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $primaryKey = "id";
    protected $fillable =[
        'id',
        'nik',
        'nama',
        'perusahaan_id',
        'departemen_id',
        'jabatan_id',
        'jenis_kelamin',
        'tanggal_lahir'
    ];

    public function datamcu(){
        return $this->hasMany(Datamcu::class, 'karyawan_id');
    }

    public function departemen(){
        return $this->belongsTo(Departemen::class);
    }

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }

    public function perusahaan(){
        return $this->belongsTo(Perusahaan::class);
    }


    protected $guarded = [];

    // public function datamcu(){
    //     return $this->hasMany(datamcu::class);
    // }

}

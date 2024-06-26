<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table ="perusahaan";
    protected $primaryKey = "id";
    protected $fillable = ['id','perusahaan'];

    public function datakaryawan(){
        return $this->hasMany(datakaryawan::class);
    }

}

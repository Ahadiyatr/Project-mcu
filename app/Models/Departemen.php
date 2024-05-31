<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;
    protected $table = "departemen";
    protected $primaryKey = "id";
    protected $fillable = ['id','departemen'];

    public function datamcu(){
        return $this->hasMany(datamcu::class);
    }

    public function datakaryawan(){
        return $this->hasMany(datakaryawan::class);
    }

    protected $guarded = [];


}

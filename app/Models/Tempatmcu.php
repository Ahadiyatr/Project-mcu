<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempatmcu extends Model
{
    use HasFactory;

    protected $table ="tmptmcu";
    protected $primaryKey = "id";
    protected $fillable = ['id','tempat'];

    // public function datakaryawan(){
    //     return $this->hasMany(datakaryawan::class);
    // }

}

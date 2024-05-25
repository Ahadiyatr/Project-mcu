<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class Jabatan extends Model
{
    use HasFactory;
    protected $table ="jabatan";
    protected $primaryKey = "id";
    protected $fillable = ['id','jabatan'];

    public function datamcu()
    {
        return $this->hasMany(Jabatan::class);
    }

    protected $guarded = [];
}

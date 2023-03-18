<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas_15483';
    protected $guarded = ['id_kelas_15483'];

    public function siswa()
    {
        return $this->hasMany(siswa::class);
    }
}

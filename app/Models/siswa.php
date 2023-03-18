<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa_15483';
    protected $guarded = [];

    public function kelas()
    {
        return $this->hasOne(kelas::class, 'id_kelas_15483', 'id_kelas_15483');
    }
    public function spp()
    {
        return $this->hasOne(spp::class, 'id_spp_15483', 'id_spp_15483');
    }
}

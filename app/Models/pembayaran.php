<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $fillable = [
        'id_petugas',
        'nisn',
        'tanggal',
        'id_spp',
        'bulan',
        'tahun',
        'jumlah'

        
    ];
    public function siswa()
    {
        return $this->hasOne(siswa::class, 'nisn_15483', 'nisn_15483');
    }
}

<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class siswa extends  Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;
    protected $table = 'siswa_15483';
    protected $fillable = [
        'nisn_15483',
        'nis_15483',
        'nama_15483',
        'id_kelas_15483',
        'password',
        'alamat_15483',
        'no_telp_15483',
        'id_spp_15483',

        
    ];

    protected $primaryKey = 'nisn_15483';

    public function kelas()
    {
        return $this->hasOne(kelas::class, 'id_kelas_15483', 'id_kelas_15483');
    }
    public function spp()
    {
        return $this->hasOne(spp::class, 'id_spp_15483', 'id_spp_15483');
    }
    public function pembayaran()
    {
        return $this->hasOne(pembayaran::class, 'nisn_15483', 'nisn_15483');
    }

}

<?php

namespace Database\Seeders;
use App\Models\siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        siswa::create([
            'username_15483' => 'admin',
            'password_15483' => Hash::make('password'),
            'nama_petugas_15483' => 'admin',
            'level_15483' => 'admin'
        ]);

    }
}

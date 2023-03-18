<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_15483', function (Blueprint $table) {
            $table->unsignedBigInteger('nisn_15483')->primary();
            $table->integer('nis_15483')->unique();
            $table->string('nama_15483');
            $table->unsignedBigInteger('id_kelas_15483');
            $table->text('alamat_15483');
            $table->string('no_telp_15483');
            $table->unsignedBigInteger('id_spp_15483');
            $table->timestamps();


            $table->foreign('id_kelas_15483')->references('id_kelas_15483')->on('kelas_15483')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_15483');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPenilaianAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_penilaian_anggota', function (Blueprint $table) {
          $table->id();
          $table->foreignId('periode_id');
          $table->string('nama_alternatif');
          $table->float('nilai_1');
          $table->float('nilai_2');
          $table->float('nilai_3');
          $table->float('nilai_4');
          $table->float('jumlah');
          $table->timestamps();

          $table->index(['periode_id', 'id'], 'riwayat_penilian_anggota_index');
          $table->foreign('periode_id')->references('id')->on('periode_anggota')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_penilaian_anggota');
    }
}

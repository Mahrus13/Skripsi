<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPenilaianKetuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_penilaian_ketua', function (Blueprint $table) {
          $table->id();
          $table->foreignId('periode_id');
          $table->string('nama_alternatif');
          $table->float('nilai_1');
          $table->float('nilai_2');
          $table->float('nilai_3');
          $table->float('nilai_4');
          $table->float('nilai_5');
          $table->float('nilai_6');
          $table->float('nilai_7');
          $table->float('nilai_8');
          $table->float('jumlah');
          $table->timestamps();

          $table->index(['periode_id', 'id'], 'riwayat_penilian_ketua_index');
          $table->foreign('periode_id')->references('id')->on('periode_ketua')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_penilaian_ketua');
    }
}

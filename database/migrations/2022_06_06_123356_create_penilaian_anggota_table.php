<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_anggota', function (Blueprint $table) {
          $table->id();
          $table->foreignId('alternatif_id');
          $table->foreignId('user_id');
          $table->integer('nilai_1');
          $table->integer('nilai_2');
          $table->integer('nilai_3');
          $table->integer('nilai_4');
          $table->timestamps();

          $table->index(['alternatif_id', 'nilai_1', 'nilai_2', 'nilai_3', 'nilai_4'], 'penilaian_anggota_index');
          $table->foreign('alternatif_id')->references('id')->on('alternatif_anggota')->onDelete('cascade');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian_anggota');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPenilaianKetuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_penilaian_ketua', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alternatif');
            $table->float('nilai_1');
            $table->float('nilai_2');
            $table->float('nilai_3');
            $table->float('nilai_4');
            $table->float('nilai_5');
            $table->float('nilai_6');
            $table->float('nilai_7');
            $table->float('nilai_8');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_penilaian_ketua');
    }
}

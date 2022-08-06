<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubKriteriaAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_kriteria_anggota', function (Blueprint $table) {
            $table->id();
            $table->string('sub_kriteria');
            $table->integer('nilai');
            $table->string('keterangan');
            $table->timestamps();

            $table->index(['sub_kriteria', 'nilai', 'keterangan'], 'sub_kriteria_anggota_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_kriteria_anggota');
    }
}

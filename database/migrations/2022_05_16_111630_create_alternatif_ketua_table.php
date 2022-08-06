<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternatifKetuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatif_ketua', function (Blueprint $table) {
            $table->id();
            $table->string('kode_alternatif');
            $table->string('nama_alternatif', 100);
            $table->string('t_alternatif');
            $table->string('tl_alternatif');
            $table->string('alamat_alternatif');
            $table->string('telp_alternatif');
            $table->string('jk_alternatif');
            $table->enum('jk_alternatif', ['Laki-Laki', 'Perempuan']);
            $table->enum('pendidikan_alternatif', ['S1', 'SLTA', 'SLTP', 'SD']);
            $table->timestamps();
            $table->index(['id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternatif_ketua');
    }
}

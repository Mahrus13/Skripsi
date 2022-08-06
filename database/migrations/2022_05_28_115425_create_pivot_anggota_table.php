<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_anggota', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id');
            $table->foreignId('subanggota_id');
            $table->timestamps();

            $table->index(['anggota_id', 'subanggota_id', 'id'], 'pivot_anggota_index');
            $table->foreign('anggota_id')->references('id')->on('kriteria_anggota')->onDelete('cascade');
            $table->foreign('subanggota_id')->references('id')->on('sub_kriteria_anggota')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_anggota');
    }
}

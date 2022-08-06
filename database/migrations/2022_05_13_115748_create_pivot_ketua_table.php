<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotKetuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_ketua', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ketua_id');
            $table->foreignId('subketua_id');
            $table->timestamps();

            $table->index(['ketua_id', 'subketua_id', 'id'], 'pivot_ketua_index');
            $table->foreign('ketua_id')->references('id')->on('kriteria_ketua')->onDelete('cascade');
            $table->foreign('subketua_id')->references('id')->on('sub_kriteria_ketua')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_ketua');
    }
}

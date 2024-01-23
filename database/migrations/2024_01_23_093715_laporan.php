<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Laporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_its', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->date('tanggal');
            $table->string('unit');
            $table->string('jenis');
            $table->string('kerusakan');
            $table->time('jam_laporan');
            $table->time('jam_selesai');
            $table->integer('selisih');
            $table->string('keterangan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_it');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_ruangan');
            $table->foreignId('id_merk');
            $table->date('tanggal');
            $table->string('status');
            $table->string('keterangan');
            $table->timestamps();

            $table->softDeletes();
            $table->index('id_ruangan');
            $table->index('id_merk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}

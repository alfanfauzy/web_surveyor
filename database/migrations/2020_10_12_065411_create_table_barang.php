<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_barang', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nama_barang', 50);
            $table->char('harga_barang', 20);
            $table->char('satuan_barang', 20);
            $table->char('pasar', 20);
            $table->char('tanggal_survey', 11);
            $table->integer('status_barang');
            $table->char('surveyor', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_barang');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatawanWnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatawan_wnis', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->enum('jenis_kelamin',['L','P']);
            $table->date('tanggal_lahir');
            $table->enum('jenis_identitas',['ktp','sim','ktm','lainnya']);
            $table->string('no_hp');
            $table->string('email');
            $table->string('negara');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('no_identitas');
            $table->enum('pekerjaan',['pelajar','pns','swasta','lainnya']);
            $table->BigInteger('id_transaksi_meta')->unsigned();
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
        Schema::dropIfExists('wisatawan_wnis');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nomorkk');
            $table->string('nik');
            $table->string('nama');
            $table->string('tempatlahir');
            $table->string('tanggallahir');
            $table->string('agama');
            $table->string('jeniskelamin');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('pernikahan');
            $table->string('status');
            $table->string('kewarganegaraan');
            $table->string('namaayah');
            $table->string('namaibu');
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
        Schema::dropIfExists('penduduks');
    }
}

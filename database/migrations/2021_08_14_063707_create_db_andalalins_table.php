<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbAndalalinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_andalalins', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemohon');
            $table->text('alamat_pemohon');
            $table->string('no_tlp');
            $table->string('jenis_usaha');
            $table->text('alamat_usaha');
            $table->double('luas_lahan');
            $table->double('luas_bangunan');
            $table->string('status_lahan');
            $table->string('email');
            $table->string('surat_pemohon');
            $table->string('surat_ktr');
            $table->string('rencana_tapak');
            $table->string('ijin_ppt');
            $table->string('imb');
            $table->string('ktp');
            $table->string('ttd');
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
        Schema::dropIfExists('db_andalalins');
    }
}

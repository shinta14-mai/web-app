<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVerifikasiToDbAndalalinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('db_andalalins', function (Blueprint $table) {
            //
            $table->enum('verifikasi', ['Verifikasi Sukses', 'Belum Verifikasi'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('db_andalalins', function (Blueprint $table) {
            //
            $table->dropColumn('verifikasi');
        });
    }
}

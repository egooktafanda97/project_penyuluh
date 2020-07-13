<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjunganKelTanisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungan_kel_tani', function (Blueprint $table) {
            $table->increments('id_kunjungan');
            $table->bigInteger('id_kelompoktani');
            $table->bigInteger('id_penyuluh');
            $table->bigInteger('id_wilayah');
            $table->string('tempat', 30);
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('alamat_tambahan',80)->nullable();
            $table->text('topik');
            $table->text('masalah');
            $table->text('pemecah');
            $table->integer('laki_laki');
            $table->integer('perampuan');
            $table->string('status',10)->nullable();
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
        Schema::dropIfExists('kunjungan_kel_tani');
    }
}

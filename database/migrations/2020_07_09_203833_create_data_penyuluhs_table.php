<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPenyuluhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penyuluh', function (Blueprint $table) {
            $table->increments('id_penyuluh');
            $table->integer('nik');
            $table->string('nama',50);
            $table->string('jekel',15);
            $table->string('no_hp',20);
            $table->string('tempat_lahir',40);
            $table->date('tgl_lahir');
            $table->string('agama',15);
            $table->text('alamat');
            $table->string('status',30);
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
        Schema::dropIfExists('data_penyuluh');
    }
}

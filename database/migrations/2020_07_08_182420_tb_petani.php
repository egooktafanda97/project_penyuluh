<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbPetani extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petani', function (Blueprint $table) {
            $table->increments('id_petani');
            $table->integer('nik');
            $table->string('nama',50);
            $table->string('tempat_lahir',40);
            $table->date('tgl_lahir');
            $table->string('jekel',15);
            $table->string('no_hp',20);
            $table->bigInteger('id_wilayah');
            $table->text('alamat');
            $table->string('j_tani',50);
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
        Schema::dropIfExists('petani');
    }
}

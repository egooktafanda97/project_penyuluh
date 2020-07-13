<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kunjungan_petani extends Model
{
   protected $table = 'kunjungan_petani';
   protected $primaryKey = 'id_kunjungan_petani';
   protected $fillable = ['id_penyuluh','id_petani','id_wilayah','tanggal','waktu','alamat_tambahan','topik','masalah','pemecah','status'];
}

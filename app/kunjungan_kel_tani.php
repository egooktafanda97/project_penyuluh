<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kunjungan_kel_tani extends Model
{
    protected $table = 'kunjungan_kel_tani';
    protected $primaryKey = 'id_kunjungan';
    protected $fillable = ['id_kelompoktani','id_penyuluh','id_wilayah','tempat','tanggal','waktu','alamat_tambahan','topik','masalah','pemecah','laki_laki','perampuan','status'];
}

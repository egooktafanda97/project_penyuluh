<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelompokTani extends Model
{
    protected $table = 'kelompok_tani';
    protected $primaryKey = 'id_kelompoktani';
    protected $fillable = ['id_penyuluh','nama_kelompok','nama_ketua','id_wilayah'];
}
 
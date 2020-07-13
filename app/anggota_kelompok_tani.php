<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota_kelompok_tani extends Model
{
    protected $table = 'anggota_kelompok_tanis';
    protected $primaryKey = 'id_anggota';
    protected $fillable =['id_petani','masuk_anggota','status'];
}

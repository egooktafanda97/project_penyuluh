<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    protected $table = 'petani';
    protected $primaryKey = 'id_petani';
    protected $fillable = ['nik','nama','tempat_lahir','tgl_lahir','jekel','no_hp','id_wilayah','alamat','j_tani','status'];
}

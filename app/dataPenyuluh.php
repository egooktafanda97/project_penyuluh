<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataPenyuluh extends Model
{
    protected $table = 'data_penyuluh';
    protected $primaryKey = 'id_penyuluh';
    protected $fillable = ['nik','nama','jekel','no_hp','tempat_lahir','tgl_lahir','agama','alamat','status'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wilayah extends Model
{
	protected $table = 'wilayah';
    protected $primaryKey = 'id_wilayah';
    protected $fillable = ['id_penyuluh','nama_desa','nama_dusun',"desc"];
   
}

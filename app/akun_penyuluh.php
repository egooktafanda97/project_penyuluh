<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akun_penyuluh extends Model
{
    protected $table = 'akun_penyuluh';
    protected $fillable = ['id_penyuluh','username','password'];
}

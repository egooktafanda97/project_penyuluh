<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adm extends Model{

    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = ['username','password','nama'];
}

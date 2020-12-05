<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    protected $fillable = ['nama','kelas','nisn','jk','created_at','updated_at'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    //
    protected $table = "pertanyaans";
    protected $fillable = ['id','judul','isi','tag','profil_id','cretaed_at','updated_at'];
}

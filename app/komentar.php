<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    //
    protected $table = "komentars";
    protected $fillable = ['id','isi','cretaed_at','updated_at','pertanyaan_id','profil_id'];
}

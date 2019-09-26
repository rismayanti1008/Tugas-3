<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table='artikel';
    protected $fillable=['id','judul','isi','kategori_berita_id',];

}

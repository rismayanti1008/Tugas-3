<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table='galeri';
    protected $fillable=['id','judul','isi','kategori_berita_id',];
}

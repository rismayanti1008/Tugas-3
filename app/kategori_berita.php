<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_berita extends Model
{
   protected $table="kategori_berita";

   protected $fillable=['id','nama','users_id','created_at'];
}

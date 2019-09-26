<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_pengumuman;

class kategori_pengumumanController extends Controller
{
    public function index(){
    	$kategori_pengumuman=kategori_pengumuman::all();
    	return view('kategori_pengumuman.index', compact('kategori_pengumuman'));
   }
}

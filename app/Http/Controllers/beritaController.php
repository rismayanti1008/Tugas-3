<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;

class beritaController extends Controller
{
    public function index(){
    	$berita=berita::all();
    	return view('berita.index', compact('berita'));
   }
}

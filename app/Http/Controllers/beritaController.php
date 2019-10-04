<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;
use App\kategori_berita;

class beritaController extends Controller
{
    public function index(){
    	$berita=berita::all();
    	return view('berita.index', compact('berita'));
   }
   public function show($id){
   	$berita=berita::find($id);
   	return view('berita.show', compact('berita'));
   }
   public function create(){
   	$kategori_berita=kategori_berita::pluck('nama','id');
   	return view('berita.create', compact('kategori_berita'));
   }
   public function store(Request $request){
      $input= $request->all();
     
      berita::create($input);
      return redirect(route('berita.index'));

   }
}


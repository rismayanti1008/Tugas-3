<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_galeri;

class kategori_galeriController extends Controller
{
    public function index(){
    	$kategori_galeri=kategori_galeri::all();
    	return view('kategori_galeri.index', compact('kategori_galeri'));
   }
   public function show($id){
   	$kategori_galeri=kategori_galeri::find($id);
   	return view('kategori_galeri.show', compact('kategori_galeri'));
   }
  
   public function create(){
    	return view('kategori_galeri.create');
   }
   public function store(Request $request){
      $input= $request->all();
     
      kategori_galeri::create($input);
      return redirect(route('kategori_galeri.index'));

   }
   public function edit($id){
      $kategori_galeri=kategori_galeri::find($id);

      if (empty($kategori_galeri)){
        return redirect(route('kategori_galeri.index'));
      }
      return view('kategori_galeri.edit', compact('kategori_galeri'));
  }
  public function update($id,Request $request){
    $kategori_galeri=kategori_galeri::find($id);
    $input= $request->all();

    if (empty($kategori_galeri)){
      return redirect(route('kategori_galeri.index'));
    }
    $kategori_galeri->update($input);
    return redirect(route('kategori_galeri.index'));

  }

   public function destroy($id){
      $kategori_galeri=kategori_galeri::find($id);


    if (empty($kategori_galeri)){
      return redirect(route('kategori_galeri.index'));
    }
    $kategori_galeri->delete();
    return redirect(route('kategori_galeri.index'));
   }
}
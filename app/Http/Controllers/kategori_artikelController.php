<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_artikel;

class kategori_artikelController extends Controller
{
    public function index(){
    	$kategori_artikel=kategori_artikel::all();
    	return view('kategori_artikel.index', compact('kategori_artikel'));
   }
   public function show($id){
   	$kategori_artikel=kategori_artikel::find($id);
   	return view('kategori_artikel.show', compact('kategori_artikel'));
   }
  
   public function create(){
    	return view('kategori_artikel.create');
   }
   public function store(Request $request){
      $input= $request->all();
     
      kategori_artikel::create($input);
      return redirect(route('kategori_artikel.index'));

   }
<<<<<<< HEAD
   public function edit($id){
      $kategori_artikel=kategori_artikel::find($id);

      if (empty($kategori_artikel)){
        return redirect(route('kategori_artikel.index'));
      }
      return view('kategori_artikel.edit', compact('kategori_artikel'));
  }

   public function destroy($id){
      $kategori_artikel=kategori_artikel::find($id);

    if (empty($kategori_artikel)){
      return redirect(route('kategori_artikel.index'));
    }
    $kategori_artikel->delete();
    return redirect(route('kategori_artikel.index'));
   }

=======
>>>>>>> e91e0a425a169fd11bed46112613feb8d61afefb
}
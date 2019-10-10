<?php

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


route::resource('kategori_artikel','kategori_artikelController');
route::resource('kategori_berita','kategori_beritaController');
route::resource('kategori_galeri','kategori_galeriController');
route::resource('kategori_pengumuman','kategori_pengumumanController');
route::resource('artikel','artikelController');
route::resource('berita','beritaController');
route::resource('galeri','galeriController');
route::resource('pengumuman','pengumumanController');










<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');
Auth::routes();
Route::post('my-captcha', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Auth::routes();
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');
Auth::routes();

<<<<<<< HEAD
//route::resourse('kategori_artikel','kategori_artikelController');

=======
<<<<<<< HEAD
//route::resourse('kategori_artikel','kategori_artikelController');

=======
>>>>>>> e91e0a425a169fd11bed46112613feb8d61afefb
>>>>>>> 4196001026d85c574eb537629dade315ad210527

route::get('/kategori_artikel', 'kategori_artikelController@index')->name('kategori_artikel.index');
route::get('/kategori_artikel/create','kategori_artikelController@create')->name('kategori_artikel.create');
route::post('/kategori_artikel','kategori_artikelController@store')->name('kategori_artikel.store');
route::get('/kategori_artikel/{id}', 'kategori_artikelController@show')->name('kategori_artikel.show');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 4196001026d85c574eb537629dade315ad210527
route::get('/kategori_artikel{id}/edit', 'kategori_artikelController@edit')->name('kategori_artikel.edit');
route::patch('/kategori_artikel{id}', 'kategori_artikelController@update')->name('kategori_artikel.update');

route::delete('/kategori_artikel{id}', 'kategori_artikelController@destroy')->name('kategori_artikel.destroy');


Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
Route::get('/artikel/create', 'ArtikelController@create')->name('artikel.create');
Route::post('/artikel', 'ArtikelController@store')->name('artikel.store');
Route::get('/artikel/{id}', 'ArtikelController@show')->name('artikel.show');
=======

Route::get('/artikel', 'artikelController@index')->name('artikel.index');
Route::get('/artikel/create', 'artikelController@create')->name('artikel.create');
Route::post('/artikel', 'artikelController@store')->name('artikel.store');
Route::get('/artikel/{id}', 'artikelController@show')->name('artikel.show');
>>>>>>> e91e0a425a169fd11bed46112613feb8d61afefb


route::get('/kategori_berita', 'kategori_beritaController@index')->name('kategori_berita.index');
route::get('/kategori_berita/create','kategori_beritaController@create')->name('kategori_berita.create');
route::post('/kategori_berita','kategori_beritaController@store')->name('kategori_berita.store');
route::get('/kategori_berita/{id}', 'kategori_beritaController@show')->name('kategori_berita.show');


Route::get('/berita', 'beritaController@index')->name('berita.index');
Route::get('/berita/create', 'beritaController@create')->name('berita.create');
Route::post('/berita', 'beritaController@store')->name('berita.store');
Route::get('/berita/{id}', 'beritaController@show')->name('berita.show');



route::get('/kategori_galeri', 'kategori_galeriController@index')->name('kategori_galeri.index');
route::get('/kategori_galeri/create','kategori_galeriController@create')->name('kategori_galeri.create');
route::post('/kategori_galeri','kategori_galeriController@store')->name('kategori_galeri.store');
route::get('/kategori_galeri/{id}', 'kategori_galeriController@show')->name('kategori_galeri.show');


Route::get('/galeri', 'galeriController@index')->name('galeri.index');
Route::get('/galeri/create', 'galeriController@create')->name('galeri.create');
Route::post('/galeri', 'galeriController@store')->name('galeri.store');
Route::get('/galeri/{id}', 'galeriController@show')->name('galeri.show');


route::get('/kategori_pengumuman', 'kategori_pengumumanController@index')->name('kategori_pengumuman.index');
route::get('/kategori_pengumuman/create','kategori_pengumumanController@create')->name('kategori_pengumuman.create');
route::post('/kategori_pengumuman','kategori_pengumumanController@store')->name('kategori_pengumuman.store');
route::get('/kategori_pengumuman/{id}', 'kategori_pengumumanController@show')->name('kategori_pengumuman.show');

Route::get('/pengumuman', 'pengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create', 'pengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman', 'pengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}', 'pengumumanController@show')->name('pengumuman.show');



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
route::get('/kategori_artikel', 'kategori_artikelController@index')->name('kategori_artikel.index');
route::get('/artikel', 'artikelController@index')->name('artikel.index');
route::get('/kategori_berita', 'kategori_beritaController@index')->name('kategori_berita.index');
route::get('/berita', 'beritaController@index')->name('berita.index');

route::get('/kategori_galeri', 'kategori_galeriController@index')->name('kategori_galeri.index');
route::get('/galeri', 'galeriController@index')->name('galeri.index');
route::get('/kategori_pengumuman', 'kategori_pengumumanController@index')->name('kategori_pengumuman.index');
route::get('/pengumuman', 'pengumumanController@index')->name('pengumuman.index');



<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//**********AnaSayfa Genel*****
Route::get('/','front\HomeController@index');
Route::get('/urun/{id}','front\HomeController@urun');
Route::get('/hakkimizda','front\HomeController@hakkimizda');
Route::get('/iletisim','front\HomeController@iletisim');
Route::get('/bize_yazin','front\HomeController@bize_yazin_formu');
Route::post('/bize_yazin','front\HomeController@bize_yazin_kaydet');

//*****************Alisveris Sepet************************
Route::post('/sepete_ekle','front\UserController@sepete_ekle');
Route::get('/sepetim','front\UserController@sepetim');
Route::get('/sepet_sil/{id}','front\UserController@sepet_sil');
Route::post('/siparis_tamamla','front\UserController@siparis_tamamla');
Route::post('/satinal','front\UserController@satinal');
Route::get('/siparis_son','front\UserController@siparis_son');
Route::get('/siparisler','front\UserController@siparisler');
Route::get('/siparis_detay/{id}','front\UserController@siparis_detay');


//*****************Admin Genel********
Route::get('/admin','admin\HomeController@index');
Route::get('/admin/settings','admin\HomeController@settings');
Route::post('/admin/settingsupdate/{id}','admin\HomeController@settingsupdate');
Route::get('/admin/mesajlar','admin\HomeController@messages');
Route::get('/admin/message/edit/{id}','admin\HomeController@message_edit');
Route::post('/admin/message/edit/{id}','admin\HomeController@message_update');
Route::get('/admin/message/del/{id}','admin\HomeController@message_del');



//*****************Siparis Islemleri*********************
Route::get('/admin/siparisler','admin\SiparisController@index');
Route::get('/admin/siparis_yeni','admin\SiparisController@index');
Route::get('/admin/siparis_detay/{id}','admin\SiparisController@siparis_detay');
Route::get('/admin/siparisler/{durum}','admin\SiparisController@siparisler');
Route::post('/admin/siparis_update/{id}','admin\SiparisController@siparis_update');
Route::get('/admin/siparis_onay','admin\SiparisController@siparis_onay');
Route::get('/admin/siparis_kargo','admin\SiparisController@siparis_kargo');
Route::get('/admin/siparis_biten','admin\SiparisController@siparis_biten');







//*****************Urun Islemleri*********************

Route::get('/admin/urunler','admin\UrunController@index');
Route::get('/admin/uyeler','admin\UrunController@uye_ekle');
Route::get('/admin/urun/ekle','admin\UrunController@create');
Route::get('/admin/urun/edit/{id}','admin\UrunController@edit');
Route::get('/admin/urun/del/{id}','admin\UrunController@destroy');
Route::get('/admin/urun/show/{id}','admin\UrunController@show');
Route::post('/admin/urun/save','admin\UrunController@store');
Route::post('/admin/urun/update/{id}','admin\UrunController@update');
Route::get('/admin/urun/galeri/{id}','admin\UrunController@galeri_formu');
Route::post('/admin/urun/galeri/{id}','admin\UrunController@galeri_ekle');
Route::get('/admin/urun/galerisil/{id}','admin\UrunController@galeri_sil');




//Kategori Islemleri
Route::get('/admin/kategoriler','admin\kategoriController@index');
Route::get('/admin/kategori/ekle','admin\kategoriController@create');
Route::get('/admin/kategori/edit/{id}','admin\kategoriController@edit');
Route::get('/admin/kategori/del/{id}','admin\kategoriController@destroy');
Route::get('/admin/kategori/show/{id}','admin\kategoriController@show');
Route::post('/admin/kategori/save','admin\KategoriController@store');
Route::post('/admin/kategori/update/{id}','admin\kategoriController@update');

//*** **********************    Admin Login Islemlerii************************
Route::get('/admin/login','admin\LoginController@index')->name('admin.login');
Route::post('/admin/login','admin\LoginController@login')->name('admin.login');
Route::get('/admin/logout','admin\LoginController@logout')->name('admin.logout');
Route::get('/admin/register','admin\LoginController@register_form')->name('admin.register');
Route::post('/admin/register','admin\LoginController@register_save')->name('admin.register');


//Auth::routes();

///********* User Login*****
Route::get('/login','front\LoginController@login_form')->name('login');
Route::post('/login','front\LoginController@login')->name('login');
Route::get('/logout','front\LoginController@logout')->name('logout');
Route::get('/register','front\LoginController@register_form')->name('register');
Route::post('/register','front\LoginController@register_save')->name(' register');

///**** User Procces****
Route::get('/user','front\UserController@index')->name('user');

Route::get('/home', 'HomeController@index')->name('home');


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin','DefaultController@index')->name('mediRehber');
Route::get('admin/hastaneler','Backend\HastanelersController@index')->name('hastaneler.Index');
Route::get('admin/kullanicilar','Backend\KullanicilarsController@index')->name('kullanicilar.Index');

Route::get('admin/kullanicilar/sil/{id}','Backend\KullanicilarsController@destroy')->name('kullanicilar.Destroy');
Route::get('admin/kullanicilar/duzenle/{id}','Backend\KullanicilarsController@duzenle')->name('kullanicilar.duzenle');
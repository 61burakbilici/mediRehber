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



Route::namespace('Backend')->group(function() {
    Route::prefix('admin')->group(function(){
        Route::get('kullanicilar','KullanicilarsController@index')->name('kullanicilar.Index');
        Route::get('kullanicilar/sil/{id}','KullanicilarsController@destroy')->name('kullanicilar.Destroy');
        Route::get('kullanicilar/duzenle/{id}','KullanicilarsController@duzenle')->name('kullanicilar.duzenle');
        Route::post('kullanicilar/update/{id}','KullanicilarsController@update')->name('kullanicilar.update');

        Route::get('hastaneler','HastanelersController@index')->name('hastaneler.Index');
        Route::get('hastaneler/duzenle/{id}','HastanelersController@duzenle')->name('hastanelers.duzenle');
        Route::post('hastaneler/update/{id}','HastanelersController@update')->name('hastanelers.update');
        Route::get('hastaneler/sil/{id}','HastanelersController@destroy')->name('hastanelers.Destroy');
    });
});

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
    return view('backend.default.login');
});

//Route::get('/admin','DefaultController@index')->name('mediRehber');



Route::namespace('Backend')->group(function() {

    Route::prefix('admin')->group(function(){
        Route::get('/','DefaultController@index')->name('mediRehber');
        Route::get('/login','DefaultController@login')->name('admin.login');
        Route::post('/login','DefaultController@authenticate')->name('admin.authenticate');
    });
    Route::prefix('admin')->group(function(){
        Route::get('kullanicilar','KullanicilarsController@index')->name('kullanicilar.Index');
        Route::get('kullanicilar/ekle','KullanicilarsController@ekle')->name('kullanicilar.ekle');
        Route::get('kullanicilar/sil/{id}','KullanicilarsController@destroy')->name('kullanicilar.Destroy');
        Route::get('kullanicilar/duzenle/{id}','KullanicilarsController@duzenle')->name('kullanicilar.duzenle');
        Route::post('kullanicilar/update/{id}','KullanicilarsController@update')->name('kullanicilar.update');

        Route::get('hastaneler','HastanelersController@index')->name('hastaneler.Index');
        Route::get('/hastaneler/ekle','HastanelersController@ekle')->name('hastanelers.ekle');
        Route::get('hastaneler/duzenle/{id}','HastanelersController@duzenle')->name('hastanelers.duzenle');
        Route::post('hastaneler/update/{id}','HastanelersController@update')->name('hastanelers.update');
        Route::get('hastaneler/sil/{id}','HastanelersController@destroy')->name('hastanelers.Destroy');
    });
});


Route::namespace('Backend')->group(function () {

    Route::prefix('admin')->group(function () {

        Route::post('/blog/sortable', 'HastanesController@sortable')->name('blog.Sortable');
        Route::post('rehber/hastaneSil', 'HastanesController@destroy')->name('RehberHastane.destroy');
        Route::resource('rehber/hastane', 'HastanesController');

        Route::resource('rehber/sirket', 'SirketsController');

        Route::resource('rehber/firma', 'FirmasController');
    });

});

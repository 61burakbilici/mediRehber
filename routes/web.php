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


Route::namespace('Backend')->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', 'DefaultController@index')->name('mediRehber')->middleware('admin');
        Route::get('/login', 'DefaultController@login')->name('admin.login');
        Route::post('/login', 'DefaultController@authenticate')->name('admin.authenticate');
        Route::get('/logout', 'DefaultController@logout')->name('admin.logout');
    });

    Route::middleware(['admin'])->group(function () {
        Route::prefix('admin')->group(function () {

            Route::get('hastaneler', 'HastanelersController@index')->name('hastaneler.Index');
            Route::get('/hastaneler/ekle', 'HastanelersController@ekle')->name('hastanelers.ekle');
            Route::get('hastaneler/duzenle/{id}', 'HastanelersController@duzenle')->name('hastanelers.duzenle');
            Route::post('hastaneler/update/{id}', 'HastanelersController@update')->name('hastanelers.update');
            Route::get('hastaneler/sil/{id}', 'HastanelersController@destroy')->name('hastanelers.Destroy');
        });
    });
});


Route::namespace('Backend')->group(function () {
    Route::prefix('admin/rehber')->group(function () {
        Route::middleware(['admin'])->group(function () {

            Route::resource('/kullanicilar', 'UsersController');
            Route::resource('/hastane', 'HastanesController');
            Route::resource('/sirket', 'SirketsController');
            Route::resource('/firma', 'FirmasController');
        });

        Route::prefix('admin/diger')->group(function () {
            Route::middleware(['admin'])->group(function () {
                Route::resource('/pozisyonlar', 'PozisyonlarsController');
                Route::resource('/kategori', 'RkategorisController');

            });
        });
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

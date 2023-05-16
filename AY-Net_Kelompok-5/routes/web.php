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

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){    
        // Login
        Route::get('/login', 'LoginController@index')->name('login');
        Route::get('/postlogin', 'LoginController@postlogin')->name('postlogin');   
        // Register
        Route::get('/register', 'LoginController@indexRegister')->name('register');
        Route::post('/saveRegister', 'LoginController@saveRegister')->name('saveRegister');
    });
    
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth'])
    ->group(function(){    
        // Logout 
        Route::get('/logout', 'LoginController@logout')->name('logout');

        // Dashboard
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('/dashboard', 'DashboardController@index')->name('admin');

        // Profil
        Route::get('/profil', 'ProfilController@index')->name('profil');
        Route::post('/profilupdate', 'ProfilController@profilupdate')->name('profilupdate');

        // Administrator 
        Route::get('/administrator', 'AdministratorController@index')->name('administrator');
        Route::get('/deleteadmin/{id}', 'AdministratorController@destroy')->name('deleteadmin');
        
        // Pelanggan 
        Route::get('/pelanggan', 'PelangganController@index')->name('pelanggan');
        Route::get('/addpelanggan', 'PelangganController@add')->name('addpelanggan');
        
        // Paket
        Route::get('/paket', 'PaketController@index')->name('paket');
        Route::get('/addpaket', 'PaketController@add')->name('addpaket');
        Route::post('/savepaket', 'PaketController@save')->name('savepaket');
        Route::get('/editpaket/{id_paket}', 'PaketController@edit')->name('editpaket');
        Route::post('/updatepaket/{id_paket}', 'PaketController@update')->name('updatepaket');
        Route::get('/deletepaket/{id_paket}', 'PaketController@destroy')->name('deletepaket');
        
        // Tagihan
        Route::get('/tagihan', 'TagihanController@index')->name('tagihan');
        Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');

        // Transaksi
        Route::get('/viewtransaksi', 'TransaksiController@view')->name('viewtransaksi');
    });

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
        Route::get('/dashboard', 'DashboardController@index')
            ->name('dashboard');
        Route::get('/dashboard', 'DashboardController@index')
            ->name('admin');
        // Administrator 
        Route::get('/administrator', 'AdministratorController@index')
            ->name('administrator');
        // Pelanggan 
        Route::get('/pelanggan', 'PelangganController@index')
            ->name('pelanggan');
        // Paket
        Route::get('/paket', 'PaketController@index')
            ->name('paket');
        // Tagihan
        Route::get('/tagihan', 'TagihanController@index')
            ->name('tagihan');
    });

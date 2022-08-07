<?php

use App\Http\Controllers\CarrotController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin-logout', [App\Http\Controllers\UserController::class, 'logout'])->name('admin.logout');
Route::group(['middleware' => ['admin']], function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/user/add-new', 'addForm')->name('user.add');
        Route::post('/user/store',  'store')->name('user.store');
        Route::get('/user/all', 'all')->name('user.all');
        Route::get('/user/edit/{id}', 'edit')->name('user.edit');
        Route::post('/user/update', 'update')->name('user.update');
        Route::get('/user/free', 'free')->name('user.free');
        Route::get('/user/premium', 'premium')->name('user.premium');
        Route::get('/user/delete/{id}', 'delete')->name('user.delete');
    });

    Route::controller(CarrotController::class)->group(function () {
        Route::get('/carrot/add-new', 'addForm')->name('carrot.add');
        Route::post('/carrot/store',  'store')->name('carrot.store');
        Route::get('/carrot/all', 'all')->name('carrot.all');
        Route::get('/carrot/edit/{id}', 'edit')->name('carrot.edit');
        Route::post('/carrot/update', 'update')->name('carrot.update');
        Route::get('/carrot/delete/{id}', 'delete')->name('carrot.delete');
    });
});
Auth::routes();


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shopController;
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

Route::get('/shops', [shopController::class, 'index'])->name('shop.list');
Route::get('/shop/new', [shopController::class, 'create'])->name('shop.new');
Route::post('/shop', [shopController::class, 'store'])->name('shop.store');
Route::get('/shop/edit/{id}', [shopController::class, 'edit'])->name('shop.edit');
Route::post('/shop/update/{id}', [shopController::class, 'update'])->name('shop.update');

Route::get('/shop/{id}', [shopController::class, 'show'])->name('shop.detail');
Route::delete('/shop/{id}', [shopController::class, 'destroy'])->name('shop.destroy');






Route::get('/', function () {
    return redirect('/shops');
});

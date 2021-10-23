<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/tambah-items', [ItemsController::class, 'store'])->name('items.store');

//categories
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
Route::post('/hapus-categories', [CategoriesController::class, 'destroy'])->name('categories.destroy');

//units
Route::get('/units', [UnitsController::class, 'index'])->name('units.index');
Route::post('/hapus-units', [UnitsController::class, 'destroy'])->name('units.destroy');

//units
Route::get('/suppliers', [SuppliersController::class, 'index'])->name('suppliers.index');
Route::post('/hapus-suppliers', [SuppliersController::class, 'destroy'])->name('suppliers.destroy');


//items
Route::get('/items', [ItemsController::class, 'index'])->name('items.index');
Route::post('/hapus-items', [ItemsController::class, 'destroy'])->name('items.destroy');
Route::get('/categories-list', [ItemsController::class, 'categories'])->name('items.categories');
Route::get('/units-list', [ItemsController::class, 'units'])->name('items.units');

//users
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::post('/hapus-users', [UsersController::class, 'destroy'])->name('users.destroy');


//transaksi
Route::post('/list_transaksi', [TransaksiController::class, 'list_transaksi'])->name('transaksi.list_transaksi');
Route::get('/id_penjualan', [TransaksiController::class, 'id_penjualan'])->name('transaksi.id_penjualan');
Route::post('/transaksi', [TransaksiController::class, 'index_transaksi'])->name('transaksi.index_transaksi');


Route::post('/invoice', [TransaksiController::class, 'invoice'])->name('transaksi.invoice');
Route::post('/change-qty', [TransaksiController::class, 'change_qty'])->name('transaksi.change-qty');
Route::post('/hapus-transaksiSementara', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
Route::post('/tambah-transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
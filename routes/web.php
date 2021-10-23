<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TransaksiController;


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



Auth::routes();
Route::get('/', function () {
    return view('auth/login');
});
Route::group(['middleware' => ['auth']], function () {
Route::get('/dashboard', function () {
    return view('dashboard');
});

//users
Route::get('/users', function () {
    return view('users.users');
});
Route::post('/tambah-users', [UsersController::class, 'store'])->name('users.store');
Route::post('/updated-users', [UsersController::class, 'update'])->name('users.updated');

//categories
Route::get('/categories', function () {
    return view('categories.categories');
});
Route::post('/tambah-categories', [CategoriesController::class, 'store'])->name('categories.store');
Route::post('/updated-categories', [CategoriesController::class, 'update'])->name('categories.updated');

//units
Route::get('/units', function () {
    return view('units.units');
});
Route::post('/tambah-units', [UnitsController::class, 'store'])->name('units.store');
Route::post('/updated-units', [UnitsController::class, 'update'])->name('units.updated');



//suppliers
Route::get('/suppliers', function () {
    return view('suppliers.suppliers');
});
Route::post('/tambah-suppliers', [SuppliersController::class, 'store'])->name('suppliers.store');
Route::post('/updated-suppliers', [SuppliersController::class, 'update'])->name('suppliers.updated');

//items
Route::get('/items', function () {
    return view('items.items');
});
Route::post('/tambah-items', [ItemsController::class, 'store'])->name('items.store');
Route::post('/updated-items', [ItemsController::class, 'update'])->name('items.updated');



Route::get('/report', function () {
    return view('report');
});

Route::get('/transaksi/{id}', [TransaksiController::class, 'index']
);


Route::post('/tambah-transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');

});



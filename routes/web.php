<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Models\Banner;
use App\Models\Item;
use Illuminate\Support\Facades\Request;
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

Route::get('/', function () {
    return view('home', [
        'route' => Request::route()->getName(),
        'title' => 'NIKKY',
        'items' => Item::all(),
        'banners' => Banner::all(),
    ]);
})->name('home');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index', [
        'title' => 'NIKKY',
        'id' => 'Sebuah Id Akun',
        'name' => 'Sebuah nama',
    ]);
});
Route::get('/admin/products', [ItemController::class, 'index']);
Route::get('/admin/products/show/{id}', [ItemController::class, 'show']);
Route::get('/admin/products/create', [ItemController::class, 'create']);
Route::get('/admin/products/edit/{id}', [ItemController::class, 'edit']);
Route::post('/admin/products/update', [ItemController::class, 'update']);
Route::post('/admin/products/store', [ItemController::class, 'store']);
Route::get('/admin/products/delete/{id}', [ItemController::class, 'delete']);


Route::get('/admin/orders', [OrderController::class, 'index']);

Route::get('/admin/users', [UserController::class, 'index']);
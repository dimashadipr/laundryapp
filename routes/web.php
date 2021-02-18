<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;
use App\Http\Livewire\Orders;
use App\Http\Livewire\Transactions;

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

Route::get('/search', function () {
    return view('search');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/mitra', function () {
    return view('mitra');
});

Route::get('/layanan', function () {
    return view('layanan');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('post', Posts::class)->name('post');

Route::get('orders', Orders::class)->name('orders');

Route::get('transaction', Transactions::class)->name('transaction');

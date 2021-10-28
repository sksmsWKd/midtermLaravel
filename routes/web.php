<?php

use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|           
| Here is where you can register web routes f   or your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::delete('/delete/{id}', [CarsController::class, 'destroy'])->middleware(['auth'])->name('delete');
Route::get('/edit/{id}', [CarsController::class, 'edit'])->middleware(['auth'])->name('edit');
Route::get('/show/{id}', [CarsController::class, 'show'])->name('show');
Route::get('/index', [CarsController::class, 'index'])->name('index');
Route::get('/create', [CarsController::class, 'create'])->middleware(['auth'])->name('create');
Route::post('/store', [CarsController::class, 'store'])->middleware(['auth'])->name('store');
Route::put('/update/{id}', [CarsController::class, 'update'])->middleware(['auth'])->name('update');
Route::get('/company', [CarsController::class, 'company'])->name('company');
Route::get('/type', [CarsController::class, 'type'])->name('type');
Route::get('/appearance', [CarsController::class, 'appearance'])->name('appearance');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__ . '/auth.php';

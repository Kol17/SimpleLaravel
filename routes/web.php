<?php


use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('item',ItemController::class);

Route::get('/computer/create',[ComputerController::class,'create'])->name('computer.create');
Route::post('/computer',[ComputerController::class, 'store'])->name('computer.store');
Route::get('/computer',[ComputerController::class, 'index'])->name('computer.index');

Route::get('/computer/{computer}',[ComputerController::class,'edit'])->name('computer.edit');
Route::put('/computer/{id}',[ComputerController::class,'update'])->name('computer.update');

Route::delete('/computer/{computer}',[ComputerController::class,'destroy'])->name('computer.destroy');


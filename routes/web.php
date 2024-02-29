<?php
namespace App\Http\Controllers;
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
    return view('formulario');
});

Route::get('/formulario',[Table1Controller::class,'create']);
Route::post('/formulario',[Table1Controller::class,'store'])->name('Table1.store');

Route::get('/formulario2',[Table2Controller::class,'create']);
Route::post('/formulario2',[Table2Controller::class,'store'])->name('Table2.store');

Route::get('/formulario3',[Table3Controller::class,'create']);
Route::post('/formulario3',[Table3Controller::class,'store'])->name('Table3.store');
<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/',[StudentController::class,'index']);
Route::post("add-student",[StudentController::class,'store'])->name('add-student');
Route::get('deleet-stude')
Route::get('view-student/{id}',[StudentController::class,'show'])->name('view-student');
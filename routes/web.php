<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\PropertyController;
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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);
Route::get('/biens', [\App\Http\Controllers\PropertyController::class,'index'])->name('property.index');
Route::get('/biens/{slug}{property}', [\App\Http\Controllers\PropertyController::class,'show'])->name('property.show')->where(
    ['property'=>'[0-9]+']
);


Route::prefix('admin')->name('admin.')->group(function (){
 Route::resource('property', \App\Http\Controllers\Admin\PropertyController::class);
 Route::resource('option', \App\Http\Controllers\Admin\OptionController::class);
});

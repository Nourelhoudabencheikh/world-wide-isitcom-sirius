<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguesController;



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

Route::get('/',  [LanguesController::class, 'index']);

//switcher
Route::get('/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguesController@switchLang']);

Route::group(['middleware' => 'auth'] , function() {

Route::get('/victimes',  [victimescontroller::class ,'index'])->name('victimes.index');
Route::get('victimes/create',  [victimescontroller::class ,'create'])->name('victimes.create');
Route::POST('victimes/store',  [victimescontroller::class ,'store'])->name('victimes.store');
Route::get('victimes/show/{id}',  [victimescontroller::class ,'show'])->name('victimes.show');
Route::get('victimes/edit/{id}',  [victimescontroller::class ,'edit'])->name('victimes.edit');
Route::Put('victimes/update/{id}',  [victimescontroller::class ,'update'])->name('victimes.update');
Route::Delete('victimes/delete/{id}',  [victimescontroller::class ,'destroy'])->name('victimes.destroy');

Route::get('/sauveteurs',  [sauveteurscontroller::class ,'index'])->name('sauveteurs.index');
Route::get('sauveteurs/create',  [sauveteurscontroller::class ,'create'])->name('sauveteurs.create');
Route::POST('sauveteurs/store',  [sauveteurscontroller::class ,'store'])->name('sauveteurs.store');
Route::get('sauveteurs/show/{id}',  [sauveteurscontroller::class ,'show'])->name('sauveteurs.show');
Route::get('sauveteurs/edit/{id}',  [sauveteurscontroller::class ,'edit'])->name('sauveteurs.edit');
Route::Put('sauveteurs/update/{id}',  [sauveteurscontroller::class ,'update'])->name('sauveteurs.update');
Route::Delete('sauveteurs/delete/{id}',  [sauveteurscontroller::class ,'destroy'])->name('sauveteurs.destroy');

});
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\BudayaController;
use App\Http\Controllers\backend\KulinerController;
use App\Http\Controllers\backend\WisataController;
use App\Http\Controllers\admin\KulinersController;
use App\Http\Controllers\admin\BudayasController;
use App\Http\Controllers\admin\WisatasController;
use App\Http\Controllers\admin\TransisiController;
use App\Http\Controllers\admin\BahasaindonesiaController;
use App\Http\Controllers\admin\BahasaosingController;
use App\Http\Controllers\BahasaController;
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
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

//LOGOUT
Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

// ROUTE UNTUK HOME
Route::get('/', [BahasaController::class, 'index']);

// ROUTE KE WISATA
Route::get('/wisata', [WisataController::class, 'wisata']) -> name('wisata');
Route::get('/wisata/more/{id}', [WisataController::class, 'more']) -> name('more.wisata');

// ROUTE KE BUDAYA
Route::get('/budaya', [BudayaController::class, 'Budaya']) -> name('budaya');
Route::get('/budaya/more/{id}', [BudayaController::class, 'more']) -> name('more.budaya');

// ROUTE KE KULINER
    //FOR USER
Route::get('/kuliner',[KulinerController::class, 'kuliner']) ->name('kuliner');
Route::get('/kuliner/more/{id}',[KulinerController::class, 'more']) -> name('more.kuliner');
    //FOR ADMIN KULINER BUDAYA WISATA USER DAN BAHASA
    //CURD KULINER
    Route::prefix('kuliners')->group(function(){
        Route::get('/view',[kulinersController::class, 'kulinersView'])->name('backend.kuliner.view');
        Route::get('/add',[kulinersController::class, 'kulinersAdd'])->name('backend.kuliner.add');
        Route::post('/store',[kulinersController::class, 'kulinersStore'])->name('kuliners.store');
        Route::get('/edit/{id}',[kulinersController::class, 'kulinersEdit'])->name('kuliners.Edit');
        Route::post('/update/{id}',[kulinersController::class, 'kulinersUpdate'])->name('kuliners.update');
        Route::get('/delete/{id}',[kulinersController::class, 'kulinersDelete'])->name('kuliners.delete');
    //CRUD WISATA
    });
    Route::prefix('Wisatas')->group(function(){
        Route::get('/view',[WisatasController::class, 'wisatasView'])->name('backend.wisata.view');
        Route::get('/add',[WisatasController::class, 'wisatasAdd'])->name('backend.wisata.add');
        Route::post('/store',[WisatasController::class, 'wisatasStore'])->name('wisatas.store');
        Route::get('/edit/{id}',[WisatasController::class, 'wisatasEdit'])->name('wisatas.Edit');
        Route::post('/update/{id}',[WisatasController::class, 'wisatasUpdate'])->name('wisatas.Update');
        Route::get('/delete/{id}',[WisatasController::class, 'wisatasDelete'])->name('wisatas.delete');
     
    });
   //CRUD BUDAYA 
    Route::prefix('Budayas')->group(function(){
        Route::get('/view',[BudayasController::class, 'budayasView'])->name('backend.budaya.view');
        Route::get('/add',[BudayasController::class, 'budayasAdd'])->name('backend.budaya.add');
        Route::post('/store',[BudayasController::class, 'budayasStore'])->name('budayas.store');
        Route::get('/edit/{id}',[BudayasController::class, 'budayasEdit'])->name('budayas.Edit');
        Route::post('/update/{id}',[BudayasController::class, 'budayasUpdate'])->name('budayas.Update');
        Route::get('/delete/{id}',[BudayasController::class, 'budayasDelete'])->name('budayas.delete');
     
    });
    //CRUD ALL BHS IND ,Transisi AND TransisiON
    Route::prefix('Bahasaindonesia')->group(function(){
        Route::get('/view',[BahasaindonesiaController::class, 'bahasaView'])->name('backend.translate.view');
        Route::get('/add',[BahasaindonesiaController::class, 'bahasaAdd'])->name('backend.translate.add');
        Route::post('/store',[BahasaindonesiaController::class, 'bahasaStore'])->name('bahasa.store');
        Route::get('/edit/{id}',[BahasaindonesiaController::class, 'bahasaEdit'])->name('bahasa.Edit');
        Route::post('/update/{id}',[BahasaindonesiaController::class, 'bahasaUpdate'])->name('bahasa.Update');
        Route::get('/delete/{id}',[BahasaindonesiaController::class, 'bahasaDelete'])->name('bahasa.delete');
        
     
    });
    //BAHASA Transisi
    Route::prefix('Bahasaosing')->group(function(){
        Route::get('/view',[BahasaosingController::class, 'osingView'])->name('backend.osing.view');
        Route::get('/add',[BahasaosingController::class, 'osingAdd'])->name('backend.osing.add');
        Route::post('/store',[BahasaosingController::class, 'osingStore'])->name('osing.store');
        Route::get('/edit/{id}',[BahasaosingController::class, 'osingEdit'])->name('osing.Edit');
        Route::post('/update/{id}',[BahasaosingController::class, 'osingUpdate'])->name('osing.Update');
        Route::get('/delete/{id}',[BahasaosingController::class, 'osingDelete'])->name('osing.delete');
     
      }); 
    
    //Transisi
    Route::prefix('Transisi')->group(function(){
        Route::get('/view',[TransisiController::class, 'TransisiView'])->name('backend.transisi.view');
        Route::get('/add',[TransisiController::class, 'TransisiAdd'])->name('backend.transisi.add');
        Route::post('/store',[TransisiController::class, 'TransisiStore'])->name('transisi.store');
        Route::get('/edit/{id}',[TransisiController::class, 'TransisiEdit'])->name('transisi.Edit');
        Route::post('/update/{id}',[TransisiController::class, 'TransisiUpdate'])->name('transisi.Update');
        Route::get('/delete/{id}',[TransisiController::class, 'TransisiDelete'])->name('transisi.delete');
     
      });
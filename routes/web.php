<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KoorController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Role;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();
route::group(['prefix' => 'koordinator', 'middleware' => ['auth', 'role:koordinator']],function() {
    
   
    Route::get('/', function () {
        return view('home');}
        )->name('admin');
    Route::resource('prodi', ProdiController::class);

    Route::resource('semester', SemesterController::class);

    Route::resource('dosen', DosenController::class);

    Route::resource('koor', KoorController::class);

    Route::resource('kelas', KelasController::class);

    Route::resource('mahasiswa', MahasiswaController::class);

});
route::group(['prefix' => 'mahasiswa', 'middleware' => ['auth', 'role:mahasiswa']], function() {

    Route::get('/', function () {
        return view('home');
    });
    Route::get('/logout', function(){
        return redirect('/');
    });
    

});


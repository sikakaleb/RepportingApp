<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IngenieurController;
use App\Http\Controllers\UtilisateurController;
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
/* general routes*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('layouts/index');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [UtilisateurController::class,"store"])->name('register');

Route::post('/login', [UtilisateurController::class,"connect"])->name('login');


/* soumetteur route*/

Route::get('/user', [UtilisateurController::class,'user'] )->name('user');

Route::get('/user/suivi',[UtilisateurController::class,'suivi'])->name('suivi');

Route::get('/user/demande',[UtilisateurController::class,'demande'])->name('demande');



/*Admin route*/

Route::get('admin', [AdminController::class,'admin'])->name('admin');

Route::get('/admin/inscription', [AdminController::class,'inscription'])->name('admin.inscription');

Route::get('/admin/consultersignalement', [AdminController::class,'consultersignalement'])->name('consultersignalement');


/*technicien route*/

Route::get('/ingenieur', [IngenieurController::class,'ingenieur'])->name('ingenieur');

Route::get('/ingenieur/equipes', [IngenieurController::class,'equipes'])->name('ingenieur.equipes');

Route::get('/ingenieur/mestaches', [IngenieurController::class,'consultertaches'])->name('consultertaches');

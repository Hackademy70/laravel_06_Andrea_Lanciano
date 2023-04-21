<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/article/singlecard/{article}', [PublicController::class, 'show'])->name('singlecard.show');

// rotte per form e compilazione database
Route::get('/form', [FormController::class, 'formShow'])->name('show.form');

Route::post('/article-create', [FormController::class, 'formCreate'])->name('article.create');

// rotte e form per UPDATE database
Route::get('/form/edit/{article}', [FormController::class, 'edit'])->name('article.edit');
//NOTA BENE metodo put va inserito all'interno del form (funzione blade)
Route::put('/form/update/{article}', [FormController::class, 'update'])->name('article.update');

//eliminare un articolo
Route::delete('/form/delete/{article}', [FormController::class, 'delete'])->name('article.delete');
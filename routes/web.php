<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeiraController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\SPAController;
use App\Models\Feira;
use App\Models\Local;
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

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::post('/feira/nova', [FeiraController::class, 'store'])->name('add-feira');

Route::post('/local/novo', [LocalController::class, 'store'])->name('add-local');

Route::model('feira', Feira::class);
Route::get('/compras/remover/{feira}', [FeiraController::class, 'destroy'])
->name('rm-feira')
->middleware('auth');

Route::model('local', Local::class);
Route::get('/locais/remover/{local}', [LocalController::class, 'destroy'])
->name('rm-local')
->middleware('auth');

Route::get('/spa', [SPAController::class, 'home']);

require __DIR__.'/auth.php';

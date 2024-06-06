<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Bodetail;
use App\Http\Controllers\BodetailController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $bodetails=Bodetail::all();
    return view('dashboard',['bodetails' => $bodetails]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/BOcreate',[BodetailController::class,'bocreate']);
Route::post('/insert',[BodetailController::class,'insert']);
Route::post('/bedit/{id}',[BodetailController::class,'bedit']);
Route::delete('/deletee/{id}', [BodetailController::class, 'destroy'])->name('bodetail.destroy');
Route::put('/editinsert/{id}',[BodetailController::class,'editinsert']);
require __DIR__.'/auth.php';

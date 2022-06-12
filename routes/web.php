<?php

// use App\Http\Controllers\PagesController;

// use App\Http\Livewire\Leftbar;

use App\Http\Livewire\Pages\Casemgt;
use App\Http\Livewire\Pages\Dashboard;
use App\Http\Livewire\Pages\Status;
use App\Http\Livewire\Pages\Welcome;
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

Route::get('/', Welcome::class)->name('landing');
Route::get('/status/{casenumber}', Status::class);

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/case-management', Casemgt::class)->name('casemgt');
    Route::get('/overview', Dashboard::class)->name('dashboard');
});
require __DIR__.'/auth.php';

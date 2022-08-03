<?php

// use App\Http\Controllers\PagesController;

// use App\Http\Livewire\Leftbar;

use App\Http\Livewire\Components\Caseform;
use App\Http\Livewire\Pages\Casemgt;
use App\Http\Livewire\Pages\Dashboard;
use App\Http\Livewire\Pages\Searchcase;
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
// Route::get('/', function () {
//     return view('welcome');
// })->name('landing');
Route::get('/', Welcome::class)->name('landing');
Route::get('/search-case', Searchcase::class);
Route::get('/status', Status::class);

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/case-management/list', Casemgt::class)->name('caselist');
    Route::get('/case-management/create', Caseform::class)->name('casecreate');
    Route::get('/overview', Dashboard::class)->name('dashboard');
});
require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\LeadController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\LeadUi;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\LeadTable;

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

Route::middleware(['authUser'])->group(function () {
    Route::get('/dashboard', Dashboard::class);
    Route::get('/leads', LeadTable::class);
    //Route::get('/leads', LeadUi::class);
    //Route::get('leads/list', [LeadController::class, 'getLeads'])->name('leads.list');  
});

Route::middleware(['guestUser'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});
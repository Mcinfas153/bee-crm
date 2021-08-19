<?php

use App\Http\Controllers\CompanyController;
use App\Http\Livewire\AddUserPage;
use App\Http\Livewire\CompanyPage;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\LeadTable;
use App\Http\Livewire\ProfilePage;
use App\Http\Livewire\SettingPage;
use App\Http\Livewire\UserTable;

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
    Route::middleware(['companyProfileValid'])->group(function () {
        Route::get('/dashboard', Dashboard::class);
        Route::get('/leads', LeadTable::class);
        Route::get('/users', UserTable::class);
        Route::get('/profile', ProfilePage::class);
        Route::get('/add-user', AddUserPage::class);
        Route::get('/setting', SettingPage::class);
    });
    Route::get('/company', CompanyPage::class)->name('company-profile');
    Route::post('/add-company', [CompanyController::class,'addCompany']);
    //Route::get('/leads', LeadUi::class);
    //Route::get('leads/list', [LeadController::class, 'getLeads'])->name('leads.list');  
});

Route::middleware(['guestUser'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});
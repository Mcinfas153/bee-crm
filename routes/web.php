<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\RemarkController;
use App\Http\Controllers\Subscriptions\PaymentController;
use App\Http\Livewire\AddUserPage;
use App\Http\Livewire\CompanyPage;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\InstapagePlans;
use App\Http\Livewire\InvoiceListPage;
use App\Http\Livewire\LeadPage;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\LeadTable;
use App\Http\Livewire\PaymentPage;
use App\Http\Livewire\PlansPage;
use App\Http\Livewire\LandingPagePlans;
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
    Route::get('landingpage-plans', LandingPagePlans::class)->name('landingpage-plans')->middleware('can:adminView,App\Models\User');
    Route::get('instapage-plans', InstapagePlans::class)->name('instapage-plans')->middleware('can:adminView,App\Models\User');

    Route::middleware(['subcribeUserValid'])->group(function () {
        Route::get('/dashboard', Dashboard::class)->middleware('can:adminView,App\Models\User');
        Route::get('/leads', LeadTable::class);
        Route::get('/users', UserTable::class)->middleware('can:adminView,App\Models\User');
        Route::get('/profile', ProfilePage::class);
        Route::get('/add-user', AddUserPage::class)->middleware('can:adminView,App\Models\User');
        Route::get('/setting', SettingPage::class);
        Route::get('/lead/{id}', LeadPage::class);
        Route::get('/company', CompanyPage::class)->name('company-profile')->middleware('can:adminView,App\Models\User');
        Route::post('/add-company', [CompanyController::class,'addCompany']);
        Route::get('/invoices', InvoiceListPage::class)->middleware('can:adminView,App\Models\User');
        Route::post('/assign-lead', [LeadController::class, 'assignLead']);
    });

    Route::get('plans', PlansPage::class)->name('plans')->middleware('can:adminView,App\Models\User');
    Route::get('/payments', PaymentPage::class)->name('payments')->middleware('can:adminView,App\Models\User');

    Route::group(['namespace' => 'Subscriptions'], function() {        
        Route::post('/payments', [PaymentController::class,'store'])->name('payments.store');
    });

    //Route::get('/leads', LeadUi::class);
    //Route::get('leads/list', [LeadController::class, 'getLeads'])->name('leads.list');  
});

Route::middleware(['guestUser'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});
<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\RemarkController;
use App\Http\Controllers\Subscriptions\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\AddLeadPage;
use App\Http\Livewire\AddUserPage;
use App\Http\Livewire\AllLeadsPage;
use App\Http\Livewire\CompanyPage;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\EditLeadPage;
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
use Facade\Ignition\Middleware\AddLogs;

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
    
    Route::middleware(['subcribeUserValid'])->group(function () { 
        Route::middleware(['admin'])->group(function () {
            Route::get('/dashboard', Dashboard::class)->name('dashboard');
            Route::get('/users', UserTable::class)->name('users');  
            Route::get('/company', CompanyPage::class)->name('company-profile')->name('company.profile');
            Route::get('/add-user', AddUserPage::class)->name('user.create');
            Route::post('/add-company', [CompanyController::class,'addCompany']);
            Route::get('/unsubscribe', [PaymentController::class, 'unsubscribe']);
            Route::post('/assign-lead', [LeadController::class, 'assignLead']);
            Route::post('/update-lead-status', [LeadController::class, 'updateStatus']);
            Route::post('/user-status-change', [UserController::class, 'updateStatus']);
            Route::get('landingpage-plans', LandingPagePlans::class)->name('landingpage-plans');
            Route::get('instapage-plans', InstapagePlans::class)->name('instapage-plans');
            Route::get('/invoices', InvoiceListPage::class);
            Route::get('plans', PlansPage::class)->name('plans');
            Route::get('/payments', PaymentPage::class)->name('payments');

            Route::group(['namespace' => 'Subscriptions'], function() {        
                Route::post('/payments', [PaymentController::class,'store'])->name('payments.store');
            });
        });       

        Route::get('/leads', LeadTable::class)->name('leads.index');
        Route::get('/add-lead', AddLeadPage::class)->name('lead.create');
        Route::get('/edit-lead/{id}', EditLeadPage::class)->name('lead.edit.index');
        Route::get('/delete-lead/{id}', [LeadController::class, 'delete'])->name('lead.delete');
        Route::get('/all-leads', AllLeadsPage::class)->name('all-leads.index');
        Route::get('all-leads/get-leads', [LeadController::class, 'getLeads'])->name('leads.getLeads');
        Route::get('/profile', ProfilePage::class);
        Route::get('/setting', SettingPage::class);
        Route::get('/lead/{id}', LeadPage::class);        
    });  
});

Route::middleware(['guestUser'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});
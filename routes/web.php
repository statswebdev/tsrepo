<?php

use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Dashboard;
use App\Livewire\Ests\EstablishmentEmploymentone;
use App\Livewire\Ests\EstablishmentEmploymenttwo;
use App\Livewire\Ests\EstablishmentOperation;
use App\Livewire\Ests\EstablishmentProduction;
use App\Livewire\Ests\EstInformation;
use App\Livewire\Ests\ShowForms;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function () {
    Route::get('/', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
    Route::get('/reset-password/{token}/{email}', ResetPassword::class)->name('password.reset');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/est/edit/{estid}', Dashboard::class)->name('est.edit');
    //Route::get('/est/estinformation', EstInformation::class)->name('estinfo');
    Route::get('/ests/estinformation/{estrecordid}', EstInformation::class)->name('estinfo');
    Route::get('/ests/establishmentoperation/{estrecordid}', EstablishmentOperation::class)->name('estopera');
    Route::get('/ests/establishmentemploymentone/{estrecordid}', EstablishmentEmploymentone::class)->name('estempone');
    Route::get('/ests/establishmentemploymenttwo/{estrecordid}', EstablishmentEmploymenttwo::class)->name('estemptwo');
    Route::get('/ests/establishmentproduction/{estrecordid}', EstablishmentProduction::class)->name('estprod');


    
});

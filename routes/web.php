<?php

use App\Livewire\Admin\ViewEstRecords;
use App\Livewire\Auth\EditProfile;
use App\Livewire\Auth\EditSecurity;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Dashboard;
use App\Livewire\Ests\EstablishmentAgricultural;
use App\Livewire\Ests\EstablishmentAgriculturalEdit;
use App\Livewire\Ests\EstablishmentElectricity;
use App\Livewire\Ests\EstablishmentElectricityEdit;
use App\Livewire\Ests\EstablishmentEmploymentone;
use App\Livewire\Ests\EstablishmentEmploymentoneEdit;
use App\Livewire\Ests\EstablishmentEmploymenttwo;
use App\Livewire\Ests\EstablishmentEmploymenttwoEdit;
use App\Livewire\Ests\EstablishmentExpenses;
use App\Livewire\Ests\EstablishmentExpensesEdit;
use App\Livewire\Ests\EstablishmentFish;
use App\Livewire\Ests\EstablishmentFishEdit;
use App\Livewire\Ests\EstablishmentFuel;
use App\Livewire\Ests\EstablishmentFuelconsumption;
use App\Livewire\Ests\EstablishmentFuelconsumptionEdit;
use App\Livewire\Ests\EstablishmentFuelEdit;
use App\Livewire\Ests\EstablishmentIncome;
use App\Livewire\Ests\EstablishmentIncomeEdit;
use App\Livewire\Ests\EstablishmentOperation; // Ensure this class exists in the specified namespace
use App\Livewire\Ests\EstablishmentOperationEdit;
use App\Livewire\Ests\EstablishmentOtherservices;
use App\Livewire\Ests\EstablishmentOtherservicesEdit;
use App\Livewire\Ests\EstablishmentProduction;
use App\Livewire\Ests\EstablishmentProductionEdit;
use App\Livewire\Ests\EstablishmentStock;
use App\Livewire\Ests\EstablishmentStockEdit;
use App\Livewire\Ests\EstInformation;
use App\Livewire\Ests\EstinformationEdit;
use App\Livewire\Ests\ShowForms;
use App\Livewire\Viewests\ViewEstagri;
use App\Livewire\Viewests\ViewEstelec;
use App\Livewire\ViewEsts\ViewEstEmpone;
use App\Livewire\Viewests\ViewEstEmppro;
use App\Livewire\Viewests\ViewEstEmpprod;
use App\Livewire\Viewests\ViewEstEmptwo;
use App\Livewire\Viewests\ViewEstexpenses;
use App\Livewire\Viewests\ViewEstfish;
use App\Livewire\Viewests\ViewEstfuel;
use App\Livewire\Viewests\ViewEstfuelcosumption;
use App\Livewire\Viewests\ViewEstincome;
use App\Livewire\Viewests\ViewEstInfo;
use App\Livewire\Viewests\ViewEstOpera;
use App\Livewire\Viewests\ViewEstotherservices;
use App\Livewire\Viewests\ViewEststock;
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
    Route::get('/user/edit-profile', EditProfile::class)->name('edit.profile');
    Route::get('/user/edit-security', EditSecurity::class)->name('edit.security');
    Route::get('/est/edit/{estid}', Dashboard::class)->name('est.edit');
    Route::get('/view/estrecords/{estid}', ViewEstRecords::class)->name('est.view');
    Route::get('/view/estinfo/{estrecordid}/{userid}', ViewEstInfo::class)->name('est.info.view');
    Route::get('/view/estopera/{estrecordid}/{userid}', ViewEstOpera::class)->name('est.opera.view');
    Route::get('/view/estempone/{estrecordid}/{userid}', ViewEstEmpone::class)->name('est.empone.view');
    Route::get('/view/estemptwo/{estrecordid}/{userid}', ViewEstEmptwo::class)->name('est.emptwo.view');
    Route::get('/view/estprod/{estrecordid}/{userid}', ViewEstEmpprod::class)->name('est.prod.view');
    Route::get('/view/estagri/{estrecordid}/{userid}', ViewEstagri::class)->name('est.agri.view');
    Route::get('/view/estfish/{estrecordid}/{userid}', ViewEstfish::class)->name('est.fish.view');
    Route::get('/view/estelec/{estrecordid}/{userid}', ViewEstelec::class)->name('est.elec.view');
    Route::get('/view/estfuel/{estrecordid}/{userid}', ViewEstfuel::class)->name('est.fuel.view');
    Route::get('/view/estfuelconsumption/{estrecordid}/{userid}', ViewEstfuelcosumption::class)->name('est.fuelconsumption.view');
    Route::get('/view/estotherservice/{estrecordid}/{userid}', ViewEstotherservices::class)->name('est.otherservices.view');
    Route::get('/view/estincome/{estrecordid}/{userid}', ViewEstincome::class)->name('est.income.view');
    Route::get('/view/estexpenses/{estrecordid}/{userid}', ViewEstexpenses::class)->name('est.expenses.view');
    Route::get('/view/eststock/{estrecordid}/{userid}', ViewEststock::class)->name('est.stock.view');
    //Route::get('/est/estinformation', EstInformation::class)->name('estinfo');
    Route::get('/ests/estinformation/{estrecordid}', EstInformation::class)->name('estinfo');
    Route::get('/ests/edit-estinformation/{estrecordid}', EstinformationEdit::class)->name('edit-estinfo');

    Route::get('/ests/establishmentoperation/{estrecordid}', EstablishmentOperation::class)->name('estopera');
    Route::get('/ests/edit-establishmentoperation/{estrecordid}', EstablishmentOperationEdit::class)->name('edit-estopera');

    Route::get('/ests/establishmentemploymentone/{estrecordid}', EstablishmentEmploymentone::class)->name('estempone');
    Route::get('/ests/edit-establishmentemploymentone/{estrecordid}', EstablishmentEmploymentoneEdit::class)->name('edit-estempone');

    Route::get('/ests/establishmentemploymenttwo/{estrecordid}', EstablishmentEmploymenttwo::class)->name('estemptwo');
    Route::get('/ests/edit-establishmentemploymenttwo/{estrecordid}', EstablishmentEmploymenttwoEdit::class)->name('edit-estemptwo');

    Route::get('/ests/establishmentproduction/{estrecordid}', EstablishmentProduction::class)->name('estprod');
    Route::get('/ests/edit-establishmentproduction/{estrecordid}', EstablishmentProductionEdit::class)->name('edit-estprod');

    Route::get('/ests/establishmentagricultural/{estrecordid}', EstablishmentAgricultural::class)->name('estagri');
    Route::get('/ests/edit-establishmentagricultural/{estrecordid}', EstablishmentAgriculturalEdit::class)->name('edit-estagri');

    Route::get('/ests/establishfish/{estrecordid}', EstablishmentFish::class)->name('estfish');
    Route::get('/ests/edit-establishfish/{estrecordid}', EstablishmentFishEdit::class)->name('edit-estfish');

    Route::get('/ests/establishelectricity/{estrecordid}', EstablishmentElectricity::class)->name('estelec');
    Route::get('/ests/edit-establishelectricity/{estrecordid}', EstablishmentElectricityEdit::class)->name('edit-estelec');

    Route::get('/ests/establishfuel/{estrecordid}', EstablishmentFuel::class)->name('estfuel');
    Route::get('/ests/edit-establishfuel/{estrecordid}', EstablishmentFuelEdit::class)->name('edit-estfuel');

    Route::get('/ests/establishfuelconsumption/{estrecordid}', EstablishmentFuelconsumption::class)->name('estfuelconsumption');
    Route::get('/ests/edit-establishfuelconsumption/{estrecordid}', EstablishmentFuelconsumptionEdit::class)->name('edit-estfuelconsumption');

    Route::get('/ests/establishotherservice/{estrecordid}', EstablishmentOtherservices::class)->name('estotherservice');
    Route::get('/ests/edit-establishotherservice/{estrecordid}', EstablishmentOtherservicesEdit::class)->name('edit-estotherservice');

    Route::get('/ests/establishincome/{estrecordid}', EstablishmentIncome::class)->name('estincome');
    Route::get('/ests/edit-establishincome/{estrecordid}', EstablishmentIncomeEdit::class)->name('edit-estincome');

    Route::get('/ests/establishexpense/{estrecordid}', EstablishmentExpenses::class)->name('estexpenses');
    Route::get('/ests/edit-establishexpense/{estrecordid}', EstablishmentExpensesEdit::class)->name('edit-estexpenses');

    Route::get('/ests/establishstock/{estrecordid}', EstablishmentStock::class)->name('eststock');
    Route::get('/ests/edit-establishstock/{estrecordid}', EstablishmentStockEdit::class)->name('edit-eststock');


    
});

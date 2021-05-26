<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('customers')->group(function () {
    Route::get('/new', function () {
        return view('customers.new');
    })->name('customers.new');
    Route::get('/list', function () {
        return view('customers.list');
    })->name('customers.list');
    Route::get('/reports', function () {
        return view('customers.reports');
    })->name('customers.reports');
    // Route::get('/vehicles', ListMileageTrans::class)->name('vehicle.list');
    // Route::get('/{id}/vehicles', MileageTransactions::class)->name('vehicle.mileage');
});

Route::prefix('loans')->group(function () {
    Route::get('/new', function () {
        return view('loans.new');
    })->name('loans.new');
    Route::get('/active', function () {
        return view('loans.active');
    })->name('loans.active');
    Route::get('/pending', function () {
        return view('loans.pending');
    })->name('loans.pending');
    Route::get('/overdue', function () {
        return view('loans.overdue');
    })->name('loans.overdue');
    Route::get('/reports', function () {
        return view('loans.reports');
    })->name('loans.reports');
    // Route::get('/vehicles', ListMileageTrans::class)->name('vehicle.list');
    // Route::get('/{id}/vehicles', MileageTransactions::class)->name('vehicle.mileage');
});

Route::get('/calendar/view', function () {
    return view('calendar.view');
})->name('calendar');

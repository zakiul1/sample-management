<?php

use App\Http\Controllers\CabinetController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Group all routes under middleware
Route::middleware(['auth', 'verified'])->group(function () {

    // Customer Routes
    Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('customers', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
    Route::get('customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::put('customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
    Route::delete('customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');

    // Cabinate Routes
    Route::get('cabinates', [CabinetController::class, 'index'])->name('cabinates.index');
    Route::post('cabinates/create', [CabinetController::class, 'store'])->name('cabinates.store');

    
    Route::get('cabinates/{id}', [CabinetController::class, 'show'])->name('cabinates.show');
    Route::get('cabinates/{id}/edit', [CabinetController::class, 'edit'])->name('cabinates.edit');
    Route::put('cabinates/{id}', [CabinetController::class, 'update'])->name('cabinates.update');
    Route::delete('cabinates/{id}', [CabinetController::class, 'destroy'])->name('cabinates.destroy');

    // Factory Routes
    Route::get('factories', [FactoryController::class, 'index'])->name('factories.index');
    Route::get('factories/create', [FactoryController::class, 'create'])->name('factories.create');
    Route::post('factories', [FactoryController::class, 'store'])->name('factories.store');
    Route::get('factories/{id}', [FactoryController::class, 'show'])->name('factories.show');
    Route::get('factories/{id}/edit', [FactoryController::class, 'edit'])->name('factories.edit');
    Route::put('factories/{id}', [FactoryController::class, 'update'])->name('factories.update');
    Route::delete('factories/{id}', [FactoryController::class, 'destroy'])->name('factories.destroy');

    // Sample Routes
    Route::get('samples', [SampleController::class, 'index'])->name('samples.index');
    Route::get('samples/create', [SampleController::class, 'create'])->name('samples.create');
    Route::post('samples', [SampleController::class, 'store'])->name('samples.store');
    Route::get('samples/{id}', [SampleController::class, 'show'])->name('samples.show');
    Route::get('samples/{id}/edit', [SampleController::class, 'edit'])->name('samples.edit');
    Route::put('samples/{id}', [SampleController::class, 'update'])->name('samples.update');
    Route::delete('samples/{id}', [SampleController::class, 'destroy'])->name('samples.destroy');
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
});
require __DIR__ . '/auth.php';
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListingController;

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

// All Listings
Route::get('/', [ListingController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {
// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->name('create');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('edit');

// Edit Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('update');

// Manage Listings
Route::get('/listings/manage' , [ListingController::class, 'manage'])->name('manage');

// Single Listing
Route::get('/listings/{listing}',[ListingController::class, 'show'])->name('show');

// Store Listing Data
Route::post('/listings',[ListingController::class, 'store'])->name('store');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->name('destroy');

// Single Listing
Route::get('/listings/{listing}',[ListingController::class, 'show'])->name('show');

});

Route::get('/dashboard', [ProfileController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

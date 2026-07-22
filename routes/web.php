<?php
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [BookingController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');

Route::middleware('auth')->group(function () {
    Route::get('/booking/{room}', [BookingController::class, 'create'])->name('booking.create');

    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/booking/{booking}/confirmation', [BookingController::class, 'confirmation'])->name('booking.confirmation');
    Route::patch('/booking/{booking}/cancel', [BookingController::class, 'cancel'])->name('booking.cancel');
});



Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/rooms', [AdminDashboardController::class, 'rooms'])->name('rooms');
    Route::get('/rooms/create', [AdminDashboardController::class, 'createRoom'])->name('rooms.create');
    Route::post('/rooms', [AdminDashboardController::class, 'storeRoom'])->name('rooms.store');
    Route::get('/rooms/{room}', [AdminDashboardController::class, 'showRoom'])->name('rooms.show');
    Route::get('/rooms/{room}/edit', [AdminDashboardController::class, 'editRoom'])->name('rooms.edit');
    Route::put('/rooms/{room}', [AdminDashboardController::class, 'updateRoom'])->name('rooms.update');
    Route::delete('/rooms/{room}', [AdminDashboardController::class, 'deleteRoom'])->name('rooms.delete');
    Route::get('/categories', [AdminDashboardController::class, 'categories'])->name('categories');
    Route::post('/categories', [AdminDashboardController::class, 'storeCategory'])->name('categories.store');
    Route::put('/categories/{category}', [AdminDashboardController::class, 'updateCategory'])->name('categories.update');
    Route::delete('/categories/{category}', [AdminDashboardController::class, 'deleteCategory'])->name('categories.delete');
});





require __DIR__.'/auth.php';

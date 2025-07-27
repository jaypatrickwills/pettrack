<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TrackingManagementController;
use App\Http\Controllers\Admin\ChatManagementController;
use App\Http\Controllers\Admin\TrackingLogController;

// Public routes
Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/news', function () {
    return view('blog');
});

Route::get('/regions', function () {
    return view('regions');
});

// Service Detail Pages
Route::get('/domestic-relocations-services', function () {
    return view('services.domestic-relocations');
});

Route::get('/international-relocation-services', function () {
    return view('services.international-relocation');
});

Route::get('/pet-taxi-services', function () {
    return view('services.pet-taxi');
});

Route::get('/pet-nanny-services', function () {
    return view('services.pet-nanny');
});

Route::get('/cat-dog-crates', function () {
    return view('services.cat-dog-crates');
});

Route::get('/departure-destination-services', function () {
    return view('services.departure-destination');
});

Route::get('/pet-ground-transportation', function () {
    return view('services.pet-ground-transportation');
});

// Travel Tips Detail Pages
Route::get('/what-do-pet-movers-do', function () {
    return view('tips.what-do-pet-movers-do');
});

Route::get('/ship-reptiles-safely', function () {
    return view('tips.ship-reptiles-safely');
});

Route::get('/choosing-pet-transport-service', function () {
    return view('tips.choosing-pet-transport-service');
});

Route::get('/pet-relocation-guide', function () {
    return view('guides.pet-relocation-guide');
});

// Tracking routes
Route::get('/tracking', [TrackingController::class, 'index'])->name('tracking.index');
Route::post('/tracking/search', [TrackingController::class, 'search'])->name('tracking.search');
Route::get('/track-pet', [TrackingController::class, 'index'])->name('track-pet');
Route::get('/track-pet/search', [TrackingController::class, 'search'])->name('track-pet.search');

// Chat routes
Route::prefix('chat')->name('chat.')->group(function () {
    Route::post('/init', [ChatController::class, 'initChat'])->name('init');
    Route::get('/messages', [ChatController::class, 'getMessages'])->name('messages');
    Route::post('/send', [ChatController::class, 'sendMessage'])->name('send');
    Route::post('/end', [ChatController::class, 'endChat'])->name('end');
});

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest routes
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login']);
        Route::get('/setup', [AuthController::class, 'setupDefaultAdmin'])->name('setup');
    });

    // Protected routes
    Route::middleware('auth:admin')->group(function () {
        // Dashboard
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        
        // Profile
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::put('/profile', [AdminController::class, 'updateProfile'])->name('profile.update');
        
        // Logout
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        
        // Tracking Management
        Route::resource('trackings', TrackingManagementController::class);
        Route::get('/trackings/{tracking}/updates/create', [TrackingManagementController::class, 'createUpdate'])->name('trackings.updates.create');
        Route::post('/trackings/{tracking}/updates', [TrackingManagementController::class, 'storeUpdate'])->name('trackings.updates.store');
        
        // Chat Management
        Route::get('/chats', [ChatManagementController::class, 'index'])->name('chats.index');
        Route::get('/chats/{chat}', [ChatManagementController::class, 'show'])->name('chats.show');
        Route::get('/chats/{chat}/messages', [ChatManagementController::class, 'getMessages'])->name('chats.messages.get');
        Route::post('/chats/{chat}/messages', [ChatManagementController::class, 'sendMessage'])->name('chats.messages.store');
        Route::patch('/chats/{chat}/archive', [ChatManagementController::class, 'archiveChat'])->name('chats.archive');
        Route::patch('/chats/{chat}/reactivate', [ChatManagementController::class, 'reactivateChat'])->name('chats.reactivate');
        
        // Tracking Logs
        Route::get('/tracking-logs', [TrackingLogController::class, 'index'])->name('tracking-logs.index');
        Route::get('/tracking-logs/{trackingNumber}', [TrackingLogController::class, 'show'])->name('tracking-logs.show');
    });
});

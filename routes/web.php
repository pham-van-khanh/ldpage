<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\TripController as AdminTripController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TemplateController;
use App\Http\Controllers\Frontend\TripController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/templates', [TemplateController::class, 'index'])->name('templates.index');
Route::get('/templates/{slug}', [TemplateController::class, 'show'])->name('templates.show');
Route::get('/event/{slug}', [EventController::class, 'show'])->name('events.show');
Route::get('/event/{slug}/trip/{tripSlug}', [TripController::class, 'show'])->name('trips.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('events', AdminEventController::class)->except('show');
    Route::get('/events/{event}/trips/create', [AdminTripController::class, 'create'])->name('events.trips.create');
    Route::post('/events/{event}/trips', [AdminTripController::class, 'store'])->name('events.trips.store');
    Route::get('/trips/{trip}/edit', [AdminTripController::class, 'edit'])->name('trips.edit');
    Route::put('/trips/{trip}', [AdminTripController::class, 'update'])->name('trips.update');
    Route::delete('/trips/{trip}', [AdminTripController::class, 'destroy'])->name('trips.destroy');
});

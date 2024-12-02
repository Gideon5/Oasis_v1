<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaystackController;
use App\Http\Controllers\DashboardController;


Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::post('/checkout', [CheckoutController::class, 'show'])->middleware(['auth'])->name('checkout');
Route::prefix('events/')->group(function () {
    Route::get('search', [EventController::class, 'search'])->name('event.search');
    Route::get('{category}', [EventController::class, 'show_events_by_category'])->name('events.category');
});
Route::get('event/{slug}', [EventController::class, 'get_event_details'])->name('event_details');


Route::get('/dashboard',[DashboardController::class, 'show'])->name('dashboard.user')->middleware(['auth']);
Route::get('/dashboard/invoice/tickets/{id}/',[DashboardController::class, 'invoice_tickets'])->name('tickets')->middleware(['auth']);
Route::get('/callback', [PaystackController::class, 'callback'])->name('callback')->middleware(['auth']);;
Route::get('/success', [PaystackController::class, 'success'])->name('success')->middleware(['auth']);;
Route::get('/cancel', [PaystackController::class, 'cancel'])->name('cancel')->middleware(['auth']);;



Route::prefix('app/dashboard')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/' , [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('/events')->group(function() {
        Route::get('/', [EventController::class, 'index'])->name('all_events');
        Route::post('/{id}/ticket', [EventController::class, 'storeTicket'])->name('add_ticket');

    });
   Route::prefix('/event')->group(function() {
    Route::get('/create', [EventController::class, 'create'])->name('create_event');
    Route::post('/', [EventController::class, 'store'])->name('add_event');
    Route::get('manage/{slug}', [EventController::class, 'manage'])->name('manage_event');
    Route::get('{slug}', [EventController::class, 'show'])->name('event_show');
    Route::get('{id}/edit', [EventController::class, 'edit'])->name('edit_event');
    Route::get('{id}/ticket/create', [EventController::class, 'create_ticket'])->name('create_ticket');
    Route::put('{id}', [EventController::class, 'update'])->name('update_event');
    Route::delete('/{id}', [EventController::class, 'destroy'])->name('delete_event');
   
   });

    Route::get('users', [DashboardController::class, 'users'])->name('all_users');
    Route::get('users/create', [DashboardController::class, 'create_user'])->name('create_user');
});


require __DIR__.'/auth.php';


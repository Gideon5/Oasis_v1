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
 
Route::get('/events/cart', [CartController::class, 'index'])->name('cartpage');
// Route::get('/events/event/checkout', [EventController::class, 'checkout'])->name('checkout');

Route::get('/events/event/{slug}', [EventController::class, 'getEventDetails'])->name('event_Details');

Route::post('/checkout', [CheckoutController::class, 'show'])->middleware(['auth'])->name('checkout');
// Route::get('/test', function() {
//     return view('event.checkout.testcheckout');
// });
Route::get('/events/search', [EventController::class, 'search'])->name('event.search');
Route::get('/events/{category}', [EventController::class, 'showEventsByCategory'])->name('events.category');

Route::get('/app/dashboard', function() {
    return view('dashboard.index');
})->middleware(['auth','admin'])->name('dashboard');

Route::get('/dashboard',[DashboardController::class, 'show'])->name('dashboard.user')->middleware(['auth']);

Route::get('/callback', [PaystackController::class, 'callback'])->name('callback')->middleware(['auth']);;
Route::get('/success', [PaystackController::class, 'success'])->name('success')->middleware(['auth']);;
Route::get('/cancel', [PaystackController::class, 'cancel'])->name('cancel')->middleware(['auth']);;




Route::get('/app/dashboard/event/manage/{slug}', [EventController::class, 'manage'])->middleware(['auth', 'admin'])->name('manage_event');
Route::get('/app/dashboard/events', [EventController::class, 'index'])->middleware(['auth', 'admin'])->name('all_events');
Route::get('/app/dashboard/events/create', [EventController::class, 'create'])->middleware(['auth', 'admin'])->name('create_event');
Route::get('/app/dashboard/event/{slug}', [EventController::class, 'show'])->middleware(['auth', 'admin'])->name('event_show');
Route::get('/app/dashboard/event/{id}/edit', [EventController::class, 'edit'])->middleware(['auth', 'admin'])->name('edit_event');
Route::get('/app/dashboard/event/{id}/ticket/create/', [EventController::class, 'createTicket'])->name('create_ticket');
Route::post('/app/dashboard/events', [EventController::class, 'store'])->middleware(['auth', 'admin'])->name('add_event');
Route::put('/app/dashboard/event/{id}', [EventController::class, 'update'])->name('update_event');
Route::delete('/app/dashboard/event/{id}', [EventController::class, 'destroy'])->name('delete_event');
Route::post('/app/dashboard/events/{id}/ticket', [EventController::class, 'storeTicket'])->name('add_ticket');

Route::get('/app/dashboard/users', function() {
    return view('dashboard.users.index'); 
})->middleware(['auth', 'admin'])->name('all_users');

Route::get('/app/dashboard/users/create', function() {
    return view('dashboard.users.create');
})->middleware(['auth', 'admin'])->name('create_user');

// Route::get('/{any}', function () {
//     return view('index'); // Your main frontend view
// })->where('any', '.*');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

// Route::get('admin/dashboard', [HomeController::class, 'index']);

<?php

use App\Livewire\Dashboard\Addresses;
use App\Livewire\Dashboard\Orders;
use App\Livewire\Dashboard\PaymentMethod;
use App\Livewire\Dashboard\Profile;
use App\Livewire\Frontend\Checkout;
use App\Livewire\Frontend\CompleteOrder;
use App\Livewire\Frontend\Home;
use App\Livewire\Frontend\Shop;
use App\Livewire\Frontend\Shop\Components\Details;
use App\Livewire\Frontend\ShoppingCart;
use App\Livewire\Dashboard\Wishlist;
use App\Livewire\Frontend\Supports\AboutUs;
use App\Livewire\Frontend\Supports\Contact;
use App\Livewire\Frontend\Supports\Faq;
use App\Livewire\Frontend\Supports\PrivacyPolicy;
use App\Livewire\Products\ProductCreate;
use App\Livewire\Products\ProductEdit;
use App\Livewire\Products\ProductIndex;
use App\Livewire\Products\ProductShow;
use App\Livewire\Roles\RoleCreate;
use App\Livewire\Roles\RoleEdit;
use App\Livewire\Roles\RoleIndex;
use App\Livewire\Roles\RoleShow;
use App\Livewire\Users\UserCreate;
use App\Livewire\Users\UserEdit;
use App\Livewire\Users\UserIndex;
use App\Livewire\Users\UserShow;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('sales-report', 'sales-report')->name('sales-report');
});

//Route::view('sales-report', 'sales-report')
//    ->middleware(['auth', 'verified'])
//    ->name('sales-report');


/**
 * Livewire Block
 */
Route::get('/', Home::class)->name('home');
Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/faq', Faq::class)->name('faq');
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
Route::get('/shopping-cart', ShoppingCart::class)->name('shopping-cart');
Route::get('/checkout', Checkout::class)->name('checkout');
Route::get('/complete-order', CompleteOrder::class)->name('complete-order');
Route::get('/wishlist', Wishlist::class)->name('wishlist');
Route::get('/profile', Profile::class)->name('profile');
Route::get('/addresses', Addresses::class)->name('addresses');
Route::get('/orders', Orders::class)->name('orders');
Route::get('/payment-method', PaymentMethod::class)->name('payment-method');
Route::get('/shop', Shop::class)->name('shop');
Route::get('/shop-details', Details::class)->name('shop-details');


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    /*
     * User Management
     * */
    Route::get('users', UserIndex::class)->name('users.index')->middleware('permission:users.index|users.create|users.edit|users.delete');
    Route::get('users/create', UserCreate::class)->name('users.create')->middleware('permission:users.create');
    Route::get('users/{user}/edit', UserEdit::class)->name('users.edit')->middleware('permission:users.edit');
    Route::get('users/{user}/show', UserShow::class)->name('users.show')->middleware('permission:users.show');

    /*
     * Product Management
     * */
    Route::get('products', ProductIndex::class)->name('products.index')->middleware('permission:products.index|products.create|products.edit|products.delete');
    Route::get('products/create', ProductCreate::class)->name('products.create')->middleware('permission:products.create');
    Route::get('products/{product}/edit', ProductEdit::class)->name('products.edit')->middleware('permission:products.edit');
    Route::get('products/{product}/show', ProductShow::class)->name('products.show')->middleware('permission:products.show');

    /*
     * Role Management
     * */
    Route::get('roles', RoleIndex::class)->name('roles.index')->middleware('permission:roles.index|roles.create|roles.edit|roles.delete');
    Route::get('roles/create', RoleCreate::class)->name('roles.create')->middleware('permission:roles.create');
    Route::get('roles/{role}/edit', RoleEdit::class)->name('roles.edit')->middleware('permission:roles.edit');
    Route::get('roles/{role}/show', RoleShow::class)->name('roles.show')->middleware('permission:roles.show');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

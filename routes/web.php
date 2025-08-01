<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Users;
use App\Livewire\Articles;
use App\Livewire\Product;
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/users',Users::class)->name('users');
Route::get('/articles',Articles::class)->name('articles');
Route::get('/product',Product::class)->name('product');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

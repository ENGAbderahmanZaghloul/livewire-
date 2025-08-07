<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Users;
use App\Livewire\Articles;
use App\Livewire\Dashboard;
use App\Livewire\ArticleAdmin;
use App\Livewire\ManageUsers;
use App\Livewire\Dash\Blog\Blog;
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/users',Users::class)->name('users');
Route::get('/articles',Articles::class)->name('articles');
Route::get('/dashboard',Dashboard::class)->name('dashboard');
Route::get('/dashboard/article-admin',ArticleAdmin::class)->name('article-admin');
Route::get('/users/{user}/manage-users',ManageUsers::class)->name('manage-users');
Route::get('/dashboard/blog',Blog::class)->name('blog');// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

require __DIR__.'/auth.php';

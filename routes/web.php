<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Forum
Route::get('/forum', [ForumController::class, 'index'])
    ->name('forum.index');

Route::view('/forum/kategori', 'forum.category')
    ->name('forum.category');

Route::view('/forum/diskusi', 'forum.show')
    ->name('forum.show');

Route::view('/forum/buat-diskusi', 'forum.create')
    ->name('forum.create');


// Seminar
Route::view('/seminar', 'seminar.index')
    ->name('seminar.index');

Route::view('/seminar/detail', 'seminar.show')
    ->name('seminar.show');

Route::view('/seminar/daftar', 'seminar.register')
    ->name('seminar.register');


// Konsultasi Bisnis
Route::view('/konsultasi', 'consultation.index')
    ->name('consultation.index');

Route::view('/konsultasi/booking', 'consultation.booking')
    ->name('consultation.booking');


// About
Route::view('/tentang', 'about.index')
    ->name('about.index');


// Contact
Route::view('/kontak', 'contact.index')
    ->name('contact.index');



/*
|--------------------------------------------------------------------------
| User Area
|--------------------------------------------------------------------------
*/

// Dashboard
Route::view('/dashboard', 'dashboard.index')
    ->name('dashboard');


// Profile
Route::view('/profil', 'profile.index')
    ->name('profile.index');

Route::view('/profil/diskusi', 'profile.threads')
    ->name('profile.threads');

Route::view('/profil/seminar', 'profile.seminars')
    ->name('profile.seminars');

Route::view('/profil/konsultasi', 'profile.consultations')
    ->name('profile.consultations');



/*
|--------------------------------------------------------------------------
| Authentication - Sementara
|--------------------------------------------------------------------------
|
| Nanti bagian ini akan diganti dengan Laravel Authentication
| yang sebenarnya.
|
*/

// Route::view('/login', 'auth.login')
//     ->name('login');

// Route::view('/register', 'auth.register')
//     ->name('register');



/*
|--------------------------------------------------------------------------
| Admin Panel - UI Preview
|--------------------------------------------------------------------------
|
| Untuk sementara hanya menampilkan view.
| Middleware, controller, permission, dan database akan dibuat nanti.
|
*/

// Admin Dashboard
Route::view('/admin', 'admin.dashboard.index')
    ->name('admin.dashboard');

    Route::view('/admin/users', 'admin.users.index')
    ->name('admin.users');

    Route::view('/admin/forum/categories', 'admin.forum.categories.index')
    ->name('admin.forum.categories');

    Route::view('/admin/forum/threads', 'admin.forum.threads.index')
    ->name('admin.forum.threads');

    Route::view('/admin/forum/replies', 'admin.forum.replies.index')
    ->name('admin.forum.replies');

    Route::view('/admin/seminar/seminars', 'admin.seminar.seminars.index')
    ->name('admin.seminar.seminars');

    Route::view('/admin/seminar/registrations', 'admin.seminar.registrations.index')
    ->name('admin.seminar.registrations');

    Route::view('/admin/consultation', 'admin.consultation.index')
    ->name('admin.consultation');

    Route::view('/admin/banners', 'admin.banners.index')
    ->name('admin.banners');

    Route::view('/admin/testimonials', 'admin.testimonials.index')
    ->name('admin.testimonials');

    Route::view('/admin/settings', 'admin.settings.index')
    ->name('admin.settings');
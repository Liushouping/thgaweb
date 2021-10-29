<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\AboutsController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\Subject;

// 會員
Auth::routes();
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [UsersController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::patch('/users/{user}', [UsersController::class, 'update'])->name('users.update');

// 會話
Route::get('login', [SessionsController::class, 'create'])->name('login');
Route::post('login', [SessionsController::class, 'store'])->name('login');
Route::delete('logout', [SessionsController::class, 'destroy'])->name('logout');

// 忘記密碼
Route::get('password/reset',  [PasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email',  [PasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('password/reset/{token}',  [PasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset',  [PasswordController::class, 'reset'])->name('password.update');

// 首頁
Route::get('/', [PagesController::class, 'index'])->name('home');

// 關於我們
Route::get('/association_introduction', [AboutsController::class, 'Aiindex'])->name('Ai');
Route::get('/organization', [AboutsController::class, 'Orindex'])->name('Or');
Route::get('/supervisors', [AboutsController::class, 'Suindex'])->name('Su');
Route::get('/previous_presidents', [AboutsController::class, 'Ppindex'])->name('Pp');
Route::get('/association_consultant', [AboutsController::class, 'Acindex'])->name('Ac');

// 超跑職人
Route::get('/posts', [PostsController::class, 'index'])->name('posts');
Route::get('/posts/{post:slug}', [PostsController::class, 'show'])->name('posts.show');
// Route::get('/posts/search', [PostsController::class, 'search'])->name('posts.search');

// 超跑職人 - 主題分類
Route::get('/subjects', [PostsController::class, 'subject'])->name('subject');
Route::get('/subjects/{subject:slug}',[PostsController::class, 'SubjectShow'])->name('subject.show');

// 超跑車款
Route::get('/cars', [PagesController::class, 'car'])->name('car');

// 性能車款
Route::get('/powers', [PagesController::class, 'power'])->name('power');

// 最新消息
Route::get('/activity', [PagesController::class, 'activity'])->name('activity.indexActivity');
Route::get('/activity/{id}', [PagesController::class, 'ShowActivity'])->name('activity.ShowActivity');
Route::get('/search', [PagesController::class, 'search'])->name('search');

// 租車流程
Route::get('/sop', [PagesController::class, 'sop'])->name('sop');

// 租車須知
Route::get('/notice', [PagesController::class, 'notice'])->name('notice');

// 聯絡我們
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

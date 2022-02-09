<?php

use App\Models\Announcement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicController::class, 'home'])->name('welcome');

//!Route Announcement
Route::get('/category_announcement/{name}', [AnnouncementController::class, 'categoryAnnouncement'])->name('announcement.category');
Route::get('/form_announcement', [AnnouncementController::class, 'formAnnouncement'])->name('announcement.form');
Route::post('/form_announcement/submit', [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create');
Route::get('/details/{announcement}', [AnnouncementController::class, 'detailsAnnouncement'])->name('announcement.details');



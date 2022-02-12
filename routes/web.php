<?php

use App\Models\Announcement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;
use Laravel\Sail\Console\PublishCommand;


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

//!Route SEARCH
Route::get('/search',[PublicController::class, 'search'])->name('search');


//!Route Announcement
Route::get('/category_announcement/{id}', [AnnouncementController::class, 'categoryAnnouncement'])->name('announcement.category');
Route::get('/form_announcement', [AnnouncementController::class, 'formAnnouncement'])->name('announcement.form');
Route::post('/form_announcement/submit', [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create');
//!route upload images
Route::post('/form_announcement/images/upload', [AnnouncementController::class, 'uploadAnnouncement'])->name('announcement.upload');

Route::get('/details/{announcement}', [AnnouncementController::class, 'detailsAnnouncement'])->name('announcement.details');

//!Route Revisor
Route::get('/revisor/welcome', [RevisorController::class, 'index'])->name('revisor.welcome');
Route::post('/revisor/announcement/{id}/accept', [RevisorController::class, 'accept'])->name('revisor.accept'); 
Route::post('/revisor/announcement/{id}/reject', [RevisorController::class, 'reject'])->name('revisor.reject'); 


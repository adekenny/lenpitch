<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitlecoverController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\WorkexperienceController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Enterpreneur;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SearchController;


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

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/view_large_video/{id}', [WelcomeController::class, 'largeVideo']);


Route::get('/enter_profile/{user}', [EmployerController::class, 'enterProfile']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'category_checker'])->name('dashboard');


Route::get('/investor_dashboard', function(){
    return view('investor.dashboard');
})->name('investor.dashboard');

require __DIR__.'/auth.php';

Route::get('/enterpreneur_dashboard', [Enterpreneur::class, 'dashboard'])->name('enterpreneur.dashboard');

Route::resource('workexperience', WorkexperienceController::class);  

Route::get('/my_messages', [SettingController::class, 'myMessages']);

Route::get('/message_sender_profile/{id}', [SettingController::class, 'senderProfile']);

Route::get('jobseeker_delete_message/{id}', [SettingController::class, 'deleteMessage']);


Route::get('titlecover/create', [TitlecoverController::class, 'create'])->name('titlecover.create');

Route::post('titlecover', [TitlecoverController::class, 'store'])->name('titlecover.store'); 

Route::get('titlecover/{title}/edit', [TitlecoverController::class, 'edit'])->name('titlecover.edit');

Route::patch('titlecover/{title}', [TitlecoverController::class, 'update'])->name('titlecover.update');

Route::get('setting/edit', [SettingController::class, 'edit'])->name('setting.edit');

Route::patch('setting/update', [SettingController::class, 'update'])->name('setting.update');

Route::resource('education', EducationController::class);  



Route::get('photo/create', [PhotoController::class, 'create'])->name('photo.create');

Route::post('photo/store', [PhotoController::class, 'store'])->name('photo.store');

Route::resource('cv', CvController::class);

Route::get('video/create', [VideoController::class, 'create'])->name('video.create');

Route::post('video/store', [VideoController::class, 'store'])->name('video.store');

Route::get('video/watch', [VideoController::class, 'watch'])->name('video.watch');


/* Route::get('/admindashboard', [AdminController::class, 'dashbaord'])->name('admin.dashbaord'); */

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin_dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/up', [AdminController::class, 'uploadVideo'])->name('admin.uploadVideo');

    Route::post('/store', [AdminController::class, 'storeVideo'])->name('admin.storeVideo');

    Route::get('admin/view_status', [AdminController::class, 'viewStatus'])->name('admin.viewStatus');

    Route::get('admin/implement_verification', [AdminController::class, 'implementVerification'])->name('admin.implementVerification');

    Route::get('admin_view_user/{user}', [AdminController::class, 'viewUser']);

    Route::get('admin/{id}/disable_status', [AdminController::class, 'disable_status']);
   
    Route::get('admin/{id}/enable_status', [AdminController::class, 'enable_status']);
   
    Route::get('admin/{id}/verify_user', [AdminController::class, 'verifyUser']);
   
    Route::get('admin/{id}/unverify_user', [AdminController::class, 'unverifyUser']);
    
        Route::post('admin/find', [AdminController::class, 'find'])->name('search_email');

  });


 Route::post('document/store', [DocumentController::class, 'store'])->name('document.store');

 Route::delete('document/{document}', [DocumentController::class, 'destroy'])->name('document.destroy');




 Route::get('employer_register', function(){
     return view('employer.register');
 });

 Route::post('employer/store', [EmployerController::class, 'store'])->name('employer.company_info_store');

 Route::get('/employer_dashboard', [EmployerController::class, 'dashboard'])->name('employer.dashboard');

 Route::get('employer/create', [EmployerController::class, 'create'])->name('employer.create');

 Route::get('employer/{employer}/edit', [EmployerController::class, 'edit'])->name('employer.edit');

 Route::patch('employer/{employer}', [EmployerController::class, 'update'])->name('employer.update');

 Route::get('employer/watch_video', [EmployerController::class, 'watchVideo'])->name('employer.video');

 Route::get('employer/view_profiles', [EmployerController::class, 'viewProfiles'])->name('employer.viewprofiles');

 Route::get('employer_view_user/{user}', [EmployerController::class, 'viewUserProfile']);

 Route::get('employer_bookmark/{user}', [EmployerController::class, 'bookmarkProfile'])->name('employer.bookmark');

 Route::get('employer_compose_message/{user}', [EmployerController::class, 'composeMessage'])->name('employer.composemessage');

 Route::post('employer/send_message', [EmployerController::class, 'sendMessage'])->name('employer.sendmessage');

 Route::get('employer/bookmarks', [EmployerController::class, 'bookmarks']);

 Route::get('employer_delete_bookmark/{id}', [EmployerController::class, 'deleteBookmark']);

 Route::get('employer/view_sentmessages', [EmployerController::class, 'viewSentMessages']);

 Route::get('employer_delete_message/{id}', [EmployerController::class, 'deleteMessage']);

 Route::get('/disabled_account', [SettingController::class, 'disabledAccount']);


 Route::post('search/find', [SearchController::class, 'find'])->name('search');
 
 
 Route::get('/aboutus', [WelcomeController::class, 'aboutUs']);

 Route::get('/privacy_policy', [WelcomeController::class, 'privacyPolicy']);

 Route::get('/terms_conditions', [WelcomeController::class, 'termsConditions']);

 
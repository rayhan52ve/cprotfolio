<?php

use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\SectionController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\backend\VideoController;
use App\Http\Controllers\backend\WebSettingsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Frontend\HomePageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home.index');
});
    /*------------------------------------------
--------------------------------------------
All gest Routes List
--------------------------------------------
--------------------------------------------*/

// Route::get('/', function () {
//     return view('frontend.home.index');
// });

Route::get('/', [HomePageController::class,'index'])->name('homepage');

Route::get('/news-details/{id}', [HomePageController::class,'postDetails'])->name('postDetails');

Route::resource('comment',CommentController::class);

Route::get('/sub-categories/{id}', [HomePageController::class,'subCategoryPages'])->name('subCategoryPages');

Route::get('/get-subcategories/{categoryId}', 'VideoController@getSubcategories')->name('get-subcategories');






Auth::routes();
Route::middleware(['auth'])->group(function () {






    /*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
    Route::middleware(['auth', 'user-access:admin'])->group(function () {
        Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
        Route::resource('/admin/category', CategoryController::class);
        Route::resource('/admin/sub-category', SubCategoryController::class);
        Route::resource('/admin/post', PostController::class);
        Route::get('/admin/post/check/{id}', [PostController::class, 'check'])->name('check');
        Route::resource('/admin/video', VideoController::class);
        Route::resource('/admin/page', PageController::class);
        Route::resource('/admin/section', SectionController::class);
        Route::resource('/admin/web-settings', WebSettingsController::class);
        Route::resource('/admin/banner', BannerController::class);
    });

    /*------------------------------------------
--------------------------------------------
All User Routes List
--------------------------------------------
--------------------------------------------*/

    Route::middleware(['auth', 'user-access:user'])->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
    });
});

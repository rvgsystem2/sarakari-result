<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\GridController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TotalpostController;
use App\Http\Controllers\UserController;
use App\Models\Grid;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

// FRONTEND-ROUTES::::::::;
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/detail_page', [HomeController::class, 'detail'])->name('detail');
Route::get('/latestjob', [HomeController::class, 'latestjob'])->name('latestjob');
Route::get('/admit_card', [HomeController::class, 'admit_card'])->name('admit_card');
Route::get('/admission',[HomeController::class, 'admission'])->name('admission');
Route::get('/syllabus',[HomeController::class, 'syllbus'])->name('syllbus');
Route::get('/answerkey',[HomeController::class, 'answerkey'])->name('answerkey');
Route::get('/result',[HomeController::class, 'result'])->name('result');
Route::get('/privacy-po;licy',[HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');




// BACKEND-rOUTES::::::::::::::;

// :::::::::::::::::::::::::::::::BANNER:::::::::::::::::::::::::::::::::::::::
Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
Route::get('/banner/edit/{banner}', [BannerController::class, 'edit'])->name('banner.edit');
Route::post('/banner/update/{banner}', [BannerController::class, 'update'])->name('banner.update');
Route::get('/banner/delete/{banner}', [BannerController::class, 'destroy'])->name('banner.delete');


// ::::::::::::::::::::::::::::::::::::GRID::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/grid', [GridController::class, 'index'])->name('grid.index');
Route::get('/grid/create', [GridController::class, 'create'])->name('grid.create');
Route::post('/grid/store', [GridController::class, 'store'])->name('grid.store');
Route::get('/grid/edit/{grid}', [GridController::class, 'edit'])->name('grid.edit');
Route::post('/grid/update/{grid}', [GridController::class, 'update'])->name('grid.update');
Route::get('/grid/delete/{grid}', [GridController::class, 'destroy'])->name('grid.delete');




// :::::::::::::::::::::::::::::::::::::::::Category:::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{category}',[CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');



// :::::::::::::::::::::::::::::::::::::::Links:::::::::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/link', [LinkController::class, 'index'])->name('link.index');
Route::get('/link/create', [LinkController::class, 'create'])->name('link.create');
Route::post('/link/store', [LinkController::class, 'store'])->name('link.store');
Route::get('/link/edit/{link}', [LinkController::class, 'edit'])->name('link.edit');
Route::post('/link/update/{link}', [LinkController::class, 'update'])->name('link.update');
Route::get('/link/delete/{link}', [LinkController::class, 'destroy'])->name('link.delete');


// ::::::::::::::::::::::::::::::::::::::::::Details:::::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/detail', [DetailController::class, 'index'])->name('detail.index');
Route::get('/detail/create', [DetailController::class, 'create'])->name('detail.create');
Route::post('/detail/store', [DetailController::class, 'store'])->name('detail.store');
Route::get('/detail/edit/{detail}', [DetailController::class, 'edit'])->name('detail.edit');
Route::post('/detail/update/{detail}', [DetailController::class, 'update'])->name('detail.update');
Route::get('/detail/delete/{detail}', [DetailController::class, 'destroy'])->name('detail.delete');


// :::::::::::::::::::::::::::::::::::::::::::::Schedules:::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule.index');
Route::get('/schedule/create', [ScheduleController::class, 'create'])->name('schedule.create');
Route::post('/schedule/store', [ScheduleController::class, 'store'])->name('schedule.store');
Route::get('/schedule/edit/{schedule}', [ScheduleController::class, 'edit'])->name('schedule.edit');
Route::post('/schedule/update/{schedule}', [ScheduleController::class, 'update'])->name('schedule.update');
Route::get('/schedule/delete/{schedule}', [ScheduleController::class, 'destroy'])->name('schdeule.delete');



// :::::::::::::::::::::::::::::::::::::::Fees::::::::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/fee', [FeeController::class, 'index'])->name('fee.index');
Route::get('/fee/create', [FeeController::class, 'create'])->name('fee.create');
Route::post('/fee/store', [FeeController::class, 'store'])->name('fee.store');
Route::get('/fee/edit/{fee}', [FeeController::class, 'edit'])->name('fee.edit');
Route::post('/fee/update/{fee}', [FeeController::class, 'update'])->name('fee.update');
Route::get('/fee/delete/{fee}', [FeeController::class, 'destroy'])->name('fee.delete');


// :::::::::::::::::::::::::::::::::::::::::totalpost:::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/totalpost', [TotalpostController::class, 'index'])->name('totalpost.index');
Route::get('/totalpost/create', [TotalpostController::class, 'create'])->name('totalpost.create');
Route::post('/totalpost/store', [TotalpostController::class, 'store'])->name('totalpost.store');
Route::get('/totalpost/edit/{totalpost}', [TotalpostController::class, 'edit'])->name('totalpost.edit');
Route::post('/totalpost/update/{totalpost}', [TotalpostController::class, 'update'])->name('totalpost.update');
Route::get('/totalpost/delete{totalpost}', [TotalpostController::class, 'destroy'])->name('totalpost.delete');


// ::::::::::::::::::::::::::::::::::::::::::::Requirement::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/requirement', [RequirementController::class, 'index'])->name('requirement.index');
Route::get('/requirement/create', [RequirementController::class, 'create'])->name('requirement.create');
Route::post('/requirement/store', [RequirementController::class, 'store'])->name('requirement.store');
Route::get('/requirement/edit/{requirement}', [RequirementController::class, 'edit'])->name('requirement.edit');
Route::post('/requirement/update/{requirement}', [RequirementController::class, 'update'])->name('requirement.update');
Route::get('/requirement/delete/{requirement}', [RequirementController::class, 'destroy'])->name('requirement.delete');


// :::::::::::::::::::::::::::::::::::::::::::::::FAQS::::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/faq',[FaqController::class,'index'])->name('faq.index');
Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.create');
Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
Route::get('/faq/edit/{faq}', [FaqController::class, 'edit'])->name('faq.edit');
Route::post('faq/update/{faq}', [FaqController::class, 'update'])->name('faq.update');
Route::get('/faq/delete/{faq}', [FaqController::class, 'destroy'])->name('faq.delete');














// Admin Dashboard Route
Route::get('/admin', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.index');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth','verified'])->name('dashboard');




// Routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Permission Routes
    Route::get('permission/index',[PermissionController::class,'index'])->name('permission.index');
    Route::get('permission/create',[PermissionController::class,'create'])->name('permission.create');
    Route::post('permission/store',[PermissionController::class,'store'])->name('permission.store');
    Route::get('permission/edit/{permission}',[PermissionController::class,'edit'])->name('permission.edit');
    Route::post('permission/update/{permission}',[PermissionController::class,'update'])->name('permission.update');
    Route::get('permission/delete/{permission}',[PermissionController::class,'delete'])->name('permission.delete');

    // Role Routes
    Route::get('role/index',[RoleController::class,'index'])->name('role.index');
    Route::get('role/create',[RoleController::class,'create'])->name('role.create');
    Route::post('role/store',[RoleController::class,'store'])->name('role.store');
    Route::get('role/edit/{role}',[RoleController::class,'edit'])->name('role.edit');
    Route::post('role/update/{role}',[RoleController::class,'update'])->name('role.update');
    Route::get('role/delete/{role}',[RoleController::class,'delete'])->name('role.delete');

    // User Routes
    Route::get('user/index',[UserController::class,'index'])->name('user.index');
    Route::get('user/create',[UserController::class,'create'])->name('user.create');
    Route::post('user/store',[UserController::class,'store'])->name('user.store');
    Route::get('user/edit/{user}',[UserController::class,'edit'])->name('user.edit');
    Route::post('user/update/{user}',[UserController::class,'update'])->name('user.update');
    Route::get('user/delete/{user}',[UserController::class,'delete'])->name('user.delete');
    Route::get('/user/permissions/{user}', [UserController::class, 'assignPermissionForm'])->name('user.permission.form');
    Route::post('/user/permissions/{user}', [UserController::class, 'assignPermissionToUser'])->name('user.assign-permission');






});

require __DIR__.'/auth.php';

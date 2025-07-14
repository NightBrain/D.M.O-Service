<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MrepairController;
use App\Http\Controllers\SrepairController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;

//=====================================================================================================================================================================
//Landing Page

Route::get          ('/',                               [HomeController::class, 'welcome'])                                         ->name('welcome');
Route::get          ('/working',                        [HomeController::class, 'working'])                                         ->name('working');
Route::get          ('/ourteam',                        [HomeController::class, 'ourteam'])                                         ->name('ourteam');
Route::get          ('/contact',                        function () { return view('contact'); });
//=====================================================================================================================================================================
//Dashboard Main
Route::get          ('/home',                           [HomeController::class, 'index'])           ->middleware('auth')            ->name('home');          
//=====================================================================================================================================================================
//Accept
Route::post         ('/admin/{user}/upacce',            [MrepairController::class, 'upacce'])       ->name('admin.upacce')          ->middleware(['auth','admin']);
//Update Work
Route::get          ('/admin/work',                     [HomeController::class, 'work'])            ->name('admin.work')            ->middleware(['auth','admin']);
Route::get          ('/admin/{user}/edit',              [MrepairController::class, 'editr'])        ->name('repair.edit')           ->middleware(['auth','admin']);
Route::put          ('/admin/{user}/update',            [MrepairController::class, 'updater'])      ->name('repair.update')         ->middleware(['auth','admin']);
Route::get          ('/admin/repair/{user}/destroy',    [MrepairController::class,'destroyr'])      ->name('repair.destroy')        ->middleware(['auth','admin']);
Route::post         ('/admin',                          [SrepairController::class, 'store'])        ->name('repair.store')          ->middleware(['auth','admin']);
Route::post         ('/admin/show',                     [SrepairController::class,'show'])          ->name('repair.show')           ->middleware(['auth','admin']);
//History
Route::get          ('/admin/history',                  [HomeController::class, 'history'])                                         ->middleware(['auth','admin']);
//Edit Profile
Route::middleware   (['auth'])->get('/admin/profile',   [HomeController::class, 'profilea'])        ->name('admin.profile');
Route::put          ('/admin/{user}/updatepa',          [UserController::class, 'updatepa'])        ->name('admin.updatepa')        ->middleware(['auth','admin']);
//Role
Route::get          ('/admin/password',                 [HomeController::class,'password'])         ->name('admin.password')        ->middleware(['auth','admin']);
Route::get          ('/admin/ioeiropesdfk;m,cvxc.zvmxc.v,mfk;ssejkpofksefsk;fsk;dszxm.c,mx,cxmzc.mzfmcvemfpowekfpw39rw349-23432r5iwefmcvx,vm.vm.cx,vmx.v,mxc.,vmk',
                                                        [HomeController::class,'showuser'])         ->name('admin.role')            ->middleware(['auth','admin']);
Route::post         ('/admin/{user}/updatea',           [MrepairController::class, 'updateadmin'])  ->name('role.updateadmin')      ->middleware(['auth','admin']);
Route::post         ('/admin/{user}/updateu',           [MrepairController::class, 'updateuser'])   ->name('role.updateuser')       ->middleware(['auth','admin']);
Route::get          ('/admin/{user}/destroy/role',      [SrepairController::class,'destroy'])       ->name('admin.destroy')         ->middleware(['auth','admin']);
Route::get          ('/admin/{user}/destroy/comment',           [HomeController::class,'comment'])          ->name('comment.destroy')       ->middleware(['auth','admin']);
Route::get          ('/admin/comment',                  [HomeController::class,'showcomment'])      ->name('comment.show')          ->middleware(['auth','admin']);
Route::get          ('/admin/working',                  [WorkController::class,'index'])            ->name('admin.working')         ->middleware(['auth','admin']);
Route::post         ('/admin/creatework',               [WorkController::class,'store'])            ->name('admin.creatework')      ->middleware(['auth','admin']);
Route::get          ('/admin/{user}/destroy',           [WorkController::class,'destroy'])          ->name('working.destroy')       ->middleware(['auth','admin']);
//=====================================================================================================================================================================
//User
Route::post         ('/user',                           [MrepairController::class, 'store'])        ->name('user.store')            ->middleware(['auth','user']);
Route::post         ('/user/comment',                   [MrepairController::class, 'comment'])      ->name('user.comment');
Route::get          ('/user/{user}/edit',               [MrepairController::class, 'edit'])         ->name('user.edit')             ->middleware(['auth','user']);
Route::put          ('/user/{user}/update',             [MrepairController::class, 'update'])       ->name('user.update')           ->middleware(['auth','user']);
Route::get          ('/user/{user}/destroy',            [MrepairController::class,'destroy'])       ->name('user.destroy')          ->middleware(['auth','user']);
Route::post         ('/user/show',                      [SrepairController::class,'showu'])         ->name('repairu.show')          ->middleware(['auth','user']);
//History
Route::get          ('/user/history',                   [HomeController::class, 'user_history'])                                    ->middleware(['auth','user']);
//Edit Profile
Route::middleware   (['auth'])->get('/user/profile',    [HomeController::class, 'profile'])         ->name('user.profile');
Route::put          ('/user/{user}/updatep',            [UserController::class, 'updatep'])         ->name('user.updatep')          ->middleware(['auth','user']);

//=====================================================================================================================================================================

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');    
});

require __DIR__ . '/auth.php';
    
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');
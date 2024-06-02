<?php
 
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
 
Route::get('/', [PortfolioController::class, 'showPorto'])->name('user.index');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    // Route::controller(ProductController::class)->prefix('portofolio')->group(function () {
    //     Route::get('', 'index')->name('portofolio');
    //     Route::get('create', 'create')->name('portofolio.create');
    //     Route::post('store', 'store')->name('portofolio.store');
    //     Route::get('show/{id}', 'show')->name('portofolio.show');
    //     Route::get('edit/{id}', 'edit')->name('portofolio.edit');
    //     Route::put('edit/{id}', 'update')->name('portofolio.update');
    //     Route::delete('destroy/{id}', 'destroy')->name('portofolio.destroy');
    // });
    Route::controller(PortfolioController::class)->prefix('portfolios')->group(function () {
        Route::get('', 'index')->name('portfolios');
        Route::get('create', 'create')->name('portfolios.create');
        Route::post('store', 'store')->name('portfolios.store');
        Route::get('show/{id}', 'show')->name('portfolios.show');
        Route::get('edit/{id}', 'edit')->name('portfolios.edit');
        Route::put('edit/{id}', 'update')->name('portfolios.update');
        Route::delete('destroy/{id}', 'destroy')->name('portfolios.destroy');
    });
        
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
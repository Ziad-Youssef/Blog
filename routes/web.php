<?php

use App\Http\Controllers\AutherController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('auther/all',[AutherController::class,'index'])->name('auther.index');

// Route::get('auther/{auther}/show',[AutherController::class,'show'])->name('auther.show');

// Route::get('auther/{auther}/delete',[AutherController::class,'destroy'])->name('auther.destroy');

// Route::get('auther/create',[AutherController::class,'create'])->name('auther.create');

// Route::post('auther/store',[AutherController::class,'store'])->name('auther.store');

// Route::get('auther/{auther}/edit',[AutherController::class,'edit'])->name('auther.edit');

// Route::put('auther/{auther}/update',[AutherController::class,'update'])->name('auther.update');



// Route::prefix('auther')->group(function ()
//  {
//     Route::get('all',[AutherController::class,'index'])->name('auther.index');

//     Route::get('{auther}/show',[AutherController::class,'show'])->name('auther.show');
    
//     Route::get('{auther}/delete',[AutherController::class,'destroy'])->name('auther.destroy');
    
//     Route::get('create',[AutherController::class,'create'])->name('auther.create');
    
//     Route::post('store',[AutherController::class,'store'])->name('auther.store');
    
//     Route::get('{auther}/edit',[AutherController::class,'edit'])->name('auther.edit');
    
//     Route::put('{auther}/update',[AutherController::class,'update'])->name('auther.update');   
// });


Route::resource('auther',AutherController::class);

Route::resource('category',CategoryController::class);

Route::resource('product',ProductController::class);
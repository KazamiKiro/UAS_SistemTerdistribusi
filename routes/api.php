<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\userController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

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
//Route::view('/student','student')->name('student')->middleware(['auth']);
    
    Route::post("login", [AuthController::class, "login"]);
    Route::post("register", [AuthController::class, "register"]);
    Route::post("forgot-password", [NewPasswordController::class, "forgotPassword"]);
    Route::post("reset-password", [NewPasswordController::class, "reset"]);
    Route::post("logout", [AuthController::class, "logout"])->middleware("auth:sanctum");

    Route::get('/student',[studentController::class,'index'])->middleware(['auth:sanctum']);
    Route::get('/student/Import',[studentController::class,'andex'])->middleware(['auth'])->name("studentImport");
    Route::post('/student/imported',[studentController::class,'endex'])->middleware(['auth'])->name("studentImported");
    // Route::view('/student/new','dstudent.studentForm')->middleware(['auth'])->name("new-student");
    Route::get('/student/new',[studentController::class,'create'])->middleware(['auth'])->name("new-student"); 
    Route::get('/student/edit/{id}',[studentController::class,'edit'])->middleware(['auth']);
    Route::post('/student/update/{id}',[studentController::class,'update'])->middleware(['auth']);
    Route::get('/student/delete/{id}',[studentController::class,'destroy'])->middleware(['auth']);;
    Route::get('/student/view/{id}',[studentController::class,'show'])->middleware(['auth']);;

    Route::get('/statistik',[userController::class,'index'])->middleware(['auth'])->name("user"); 

    Route::get('/statistikUpload',[userController::class,'index'])->middleware(['auth'])->name("uploadGambar");

    Route::post('/student/create',[studentController::class,'store'])->middleware(['auth:sanctum']);

    Route::get('download-pdf',[pdfController::class,'downloadPDF'])->name("download-pdf");

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home_controller;
use App\Http\Controllers\students_reg;

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


//navbar
Route::get('/home/contact', [Home_controller::class,'contact']);
Route::get('/home/student_Login', [Home_controller::class,'student_login']);
Route::get('/home/courses', [Home_controller::class,'courses']);


//home page
Route::get('/', [Home_controller::class,'home']);
Route::get('/home', [Home_controller::class,'home'])->name('home');
Route::get('/home/student_Reg', [Home_controller::class,'student_Reg']);


// Our courses
Route::get('/Key_Board/class/level_1', [Home_controller::class,'Key_Board1']);
Route::get('/Key_Board/class/level_2', [Home_controller::class,'Key_Board2']);
Route::get('/Flute/class', [Home_controller::class,'Flute']);


//student_reg
Route::post('/student_reg', [students_reg::class,'add_Students']);


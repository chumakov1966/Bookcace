<?php
header("Content-type:text/html; charset=utf-8");

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

Route::get('/','Book@Bookcase');
Route::get('book/{id}','Book@Take_book');
Route::get('book/{id}/read','Book@Read_book');
Route::get('book/{id}/write', 'Book@Write_book');
Route::any('book/{id}/write/save', 'Book@store');
?>
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
 // Route::get('test/show/', 'My_controller@show');
// Route::get('/', function () {
    // return 'Main page';
// });
// Route::get('/post/', function () {
    // return 'Post page';
// });
// Route::get('/post/1/', function () {
    // return 'First page';
// });
// Route::get('/post/{address}', function ($address) {
    // return 'Post'.$address;
// });
Route::get('/','Book@Case');
Route::get('book/{id}','Book@Take');

?>
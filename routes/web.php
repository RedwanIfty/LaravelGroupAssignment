<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UMSController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

// Route::get('/', function () {
//         for($i=0;$i<5;$i++){
//             $name="IFTY $i";
//             $name1[]=(object)$name;
//         }  
//         return $name1;
// });
Route::get('/ums/show',[UMSController::class,'show'])->name('ums.show');
Route::get('/login',[UMSController::class,'login'])->name('user.login');
Route::post('/login',[UMSController::class,'loginSubmit'])->name('user.login.action');
// Route::get('/dashboard',[UMSController::class,'dashboard'])->name('user.dashboard');
Route::get('/user/details/{id}',[UMSController::class,'details'])->name('user.details');
Route::get('/ums/dashboard',[UMSController::class,'dashboard'])->name('ums.dash')->middleware('logged.user');
// Route::get('/logout',function(){
//     session()->forget('logged');
//     session()->flash('msg','Sucessfully Logged out');
//     return redirect()->route('user.login');
// })->name('logout');
 Route::get('/logout',[UMSController::class,'logout'])->name('ums.logout');
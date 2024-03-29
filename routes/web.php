<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MyJobApplicationController;
use App\Http\Controllers\MyJobsController;
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

Route::get("",function(){
    return redirect()->route('jobs.index');
});
Route::get('login',function(){
    return to_route('auth.create');
})->name('login');
Route::resource('jobs',JobController::class)->only(['index','show']);
Route::resource('auth',AuthController::class)->only(['create','store']);
Route::delete('auth',[AuthController::class,'destroy'])->name('auth.destroy');
Route::delete('logout',function(){
    return to_route('auth.destroy');
})->name('logout');
Route::middleware('auth')->group(function(){
    Route::resource('job.application', JobApplicationController::class)->only(['create','store']);
    Route::resource('my-job-application', MyJobApplicationController::class)->only(['index','destroy']);
    Route::resource('employer', EmployerController::class)->only(['create','store']);
    Route::middleware('employer')->resource('my-jobs', MyJobsController::class);
});
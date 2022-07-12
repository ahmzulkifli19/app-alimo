<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InitiativesController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\ExecutionController;
use App\Http\Controllers\TimelineController;

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

Route::get('/welcome', function () { return view('welcome'); });

// ----------------------------------------- Home Dashboard ----------------------------------------- //
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
});
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/', function () { return view('home'); })->name('home');
});

// ----------------------------------------- All Projects ----------------------------------------- //
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/all-projects', function () { return view('projects/all-projects'); })->name('all-projects');
});

// ----------------------------------------- Projects Initiatives ----------------------------------------- //
Route::resource('initiatives', InitiativesController::class);
Route::resource('project-initiatives', InitiativesController::class);
// Route::post('form/initiatives/update', [App\Http\Controllers\InitiativesController::class, 'updateInitiatives'])->name('form/initiatives/update');


// ----------------------------------------- Projects Assignment ----------------------------------------- //
Route::resource('assignment', AssignmentController::class);
Route::get('assignment/{id}',[AssignmentController::class, 'detail']);
Route::post('assignment.detail', [App\Http\Controllers\AssignmentController::class, 'detail'])->name('assignment.detail');
// Route::resource('assignment', InitiativesController::class);

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/project-assignment', function () { return view('projects/project-assignment'); })->name('project-assignment');
});

// ----------------------------------------- Projects Planning ----------------------------------------- //
// Route::resource('project-planning', PlanningController::class);
Route::resource('planning', PlanningController::class);

// ----------------------------------------- Timeline ----------------------------------------- //
Route::resource('project-timeline', TimelineController::class);

// ----------------------------------------- Projects Execution ----------------------------------------- //
Route::resource('execution', ExecutionController::class);

// ----------------------------------------- Projects Execution ----------------------------------------- //
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/project-execution', function () { return view('projects/project-execution'); })->name('project-execution');
});

// ----------------------------------------- information -----------------------------------------
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/information', function () { return view('information/information'); })->name('information');
});

// ----------------------------------------- Timeline -----------------------------------------
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/timeline', function () { return view('timeline/timeline'); })->name('timeline');
});

// ----------------------------------------- Profile -----------------------------------------
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/profile', function () { return view('profile/profile'); })->name('profile');
});

// ----------------------------------------- Settings -----------------------------------------
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/setting', function () { return view('profile/setting'); })->name('setting');
});

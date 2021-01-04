<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('school/add', [\App\Http\Controllers\API\SchoolController::class, 'addSchool']);
Route::post('school/{id}/campus/add', [\App\Http\Controllers\API\CampusController::class, 'addCampus']);
Route::post('courses/types/add', [\App\Http\Controllers\API\CourseTypeController::class, 'addCourseType']);
Route::get('courses/add', [\App\Http\Controllers\API\CourseController::class, 'addCourse']);

<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('use/chack', 'chack@use')->name('chack');
Route::get('room/insert', 'chack@roomblade')->name('room');
Route::get('teacher/insert', 'chack@teacherblade')->name('teacher');
Route::get('course/insert', 'chack@courseblade')->name('course');
Route::get('use/routine', 'chack@routine')->name('routine');
//Route::get('all/category','boloConttroler@allCategory')->name('all.category');
Route::post('semester/insert', 'chack@insertSmester')->name('semester');
Route::post('room/info', 'chack@roomInfo')->name('room.info');
Route::post('teacher/info', 'chack@teacherInfo')->name('teacher.info');
Route::post('course/info', 'chack@courseInfo')->name('course.info');
//show blade
Route::get('all/room', 'chack@allRoom')->name('all.room');
Route::get('all/semester', 'chack@allSemester')->name('all.semester');
Route::get('all/course', 'chack@allCourse')->name('all.course');
Route::get('all/teacher', 'chack@allTeacher')->name('all.teacher');
Route::any('all/build', 'chack@build')->name('build');
//Route::get('all/asad', 'chack@asad')->name('asad');

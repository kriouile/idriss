<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Report', 'ReportController@index')->name('Report.index');
Route::get('/Report', 'ReportController@index')->name('Report.create');
Route::get('/Report/{id}', 'ReportController@index')->name('Report.update');
Route::get('/Report/{id}', 'ReportController@index')->name('Report.delete');

Route::get('/Subject', 'SubjectController@index')->name('Subject.index');
Route::get('/Subject', 'SubjectController@index')->name('Subject.create');
Route::get('/Subject/{id}', 'SubjectController@index')->name('Subject.update');
Route::get('/Subject/{id}', 'SubjectController@index')->name('Subject.delete');

Route::get('/Work', 'WorkController@index')->name('Work.index');
Route::get('/Work', 'WorkController@index')->name('Work.create');
Route::get('/Work/{id}', 'WorkController@index')->name('Work.update');
Route::get('/Work/{id}', 'WorkController@index')->name('Work.delete');

Route::get('/Exercise', 'ExerciseController@index')->name('Exercise.index');
Route::get('/Exercise', 'ExerciseController@index')->name('Exercise.create');
Route::get('/Exercise/{id}', 'ExerciseController@index')->name('Exercise.update');
Route::get('/Exercise/{id}', 'ExerciseController@index')->name('Exercise.delete');

Route::get('/Question', 'QuestionController@index')->name('Question.index');
Route::get('/Question', 'QuestionController@index')->name('Question.create');
Route::get('/Question/{id}', 'QuestionController@index')->name('Question.update');
Route::get('/Question/{id}', 'QuestionController@index')->name('Question.delete');

Route::get('/Co', 'CoController@index')->name('Co.index');
Route::get('/Co', 'CoController@index')->name('Co.create');
Route::get('/Co/{id}', 'CoController@index')->name('Co.update');
Route::get('/Co/{id}', 'CoController@index')->name('Co.delete');

Route::get('/Group', 'GroupController@index')->name('Group.index');
Route::get('/Group', 'GroupController@index')->name('Group.create');
Route::get('/Group/{id}', 'GroupController@index')->name('Group.update');
Route::get('/Group/{id}', 'GroupController@index')->name('Group.delete');

Route::get('/Student', 'StudentController@index')->name('Student.index');
Route::get('/Student', 'StudentController@index')->name('Student.create');
Route::get('/Student/{id}', 'StudentController@index')->name('Student.update');
Route::get('/Student/{id}', 'StudentController@index')->name('Student.delete');

<?php

use Symfony\Component\HttpKernel\Fragment\RoutableFragmentRenderer;
use App\Http\Controllers\StudentsController;

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

Route::get('students/', 'StudentsController@index');
Route::get('students/{id}', 'StudentsController@detail');


// Route::get('/student', function(){
//     $students = App\Student::notpassed();
//     return view('student.index', compact('students'));
// });


// Route::get('/student/{id}', function($id){
//     $student = App\Student::find($id);    
//     return view('student.detail', compact('student'));
// });

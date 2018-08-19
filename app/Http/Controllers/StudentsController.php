<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class StudentsController extends Controller
{
    public function index(){
        $students = App\Student::all();
        return view('students.index', compact('students'));
    }
    public function detail($id){
        $student = App\Student::find($id);    
        return view('students.detail', compact('student'));
    }
}

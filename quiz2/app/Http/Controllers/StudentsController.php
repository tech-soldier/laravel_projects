<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $title = 'Student List';
        return view('students.list', compact('students', 'title'));
    }
}

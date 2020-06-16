<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    public function index() {
        $students = Student::all();
        $teachers = Student::where('description', 'teacher')->get();
        return view('welcome', compact('students', 'teachers'));
    }
}

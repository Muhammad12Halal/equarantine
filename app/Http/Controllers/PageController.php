<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Covid;
use App\Models\Student;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        return view('efront.index');
    }

    public function status()
    {
        $student = Student::get();
        return view('efront.status',compact('student'));
    }

    public function contact()
    {
        $students = Student::all();
        return view('efront.contact',compact('students'));
    }

    public function apply()
    {
        $students = Student::all();
        $colleges = College::all();
        $covids = Covid::all();
        return view('efront.apply',compact('students','covids','colleges'));
    }

    public function covid()
    {
        $students = Student::all();
        $colleges = College::all();
        $covids = Covid::all();
        return view('efront.covidapply', compact('students','covids','colleges'));
    }

    public function college()
    {
        $students = Student::all();
        $colleges = College::all();
        $covids = Covid::all();
        return view('efront.collegeapply', compact('students','covids','colleges'));
    }
}

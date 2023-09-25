<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    public function __construct()
    {

    }

    public function index()
    {
        return view('courses.index');
    }

    public function show($id)
    {
        $course = Course::find($id);
        //
        return view('courses.detail',compact('course'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {

    }

    public function show($id)
    {
        $lesson = Lesson::find($id);
        return view('lesson.detail');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    //
    public function index()
    {
        $active = "chapters";
        $chapters = Chapter::paginate(10);
        return view('admin.chapters.index',compact('chapters','active'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $active = "lessons";
        $lessons = Lesson::paginate($request->get('row', 15));
        return view('admin.lessons.index', compact('lessons','active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = "lessons";
        return view('admin.lessons.create', compact('active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'content' => 'required|string',
            'chapterID' => 'required|integer',
            'courseID' => 'required|courseID'
        ]);

        $lesson = new Lesson();
        $lesson->chapter_id = $request->get('chapterID');
        $lesson->course_id = $request->get('courseID');
        $lesson->name = $request->get('name');
        $lesson->content = $request->get('content');
        $lesson->save();
        return view('admin.lessons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $active = "lessons";
        $lesson = Lesson::find($id);
        return view('admin.lessons.detail', compact('lesson','active'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $lesson = Lesson::find($id);
        return view('admin.lessons.edit', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required|string',
            'content' => 'required|string',
            'chapterID' => 'required|integer',
            'courseID' => 'required|integer'
        ]);

        $lesson = Lesson::find($id);
        $lesson->chapter_id = $request->get('chapterID');
        $lesson->course_id = $request->get('courseID');
        $lesson->name = $request->get('name');
        $lesson->content = $request->get('content');
        $lesson->save();
        return view();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lesson::find($id)->delete();
        return view('admin.lessons.index');
    }
}

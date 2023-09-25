<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $active = 'courses';
        $courses = Course::paginate($request->get('row', 10));
        return view('admin.courses.index',compact('courses','active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $active = "courses";
        return view('admin.courses.create',compact('active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'thumbnail' => 'required',
            'price' => 'required|integer'
        ]);

        $course = new Course();
        $course = auth()->user()->id;
        $course->title = $request->get('title');
        $course->description = $request->get('description');
        $course->price = $request->get('price', 0);
        $course->thumbnail = $request->get('thumbnail', '');
        $course->save();
        return view('admin.courses.create');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $active = "courses";
        $course = Course::find($id);
        return view('admin.courses.detail', compact('course','active'));
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
        $course = Course::find($id);
        return view('admin.courses.edit',compact('course'));
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
        $this->validate($request,[]);
        $course = Course::find($id);
        $course->title = $request->get('title');
        $course->description = $request->get('description');
        $course->price = $request->get('price');
        $course->save();
        return redirect()->back()->with('status',trans());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function statistic($id)
    {
        if ($id) {

        }

        return back();
    }
}

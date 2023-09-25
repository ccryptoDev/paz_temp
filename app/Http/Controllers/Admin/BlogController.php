<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    public function __construct()
    {
    }

    public function index()
    {
        $active = "blogs";
        $blogs = Blog::paginate(10);
        return view('admin.blog.index',compact('active','blogs'));
    }

    public function show()
    {
        $active = "blogs";
        return view('admin.blog.detail',compact('active'));
    }

    public function create()
    {
        $active = "blogs";
        return view('admin.blog.create',compact('active'));
    }

    public function edit($id)
    {
        $article = Blog::find($id);
        return view('blog.edit', compact('article'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'title' => 'required|string',
                'content' => 'required|string'
            ]
        );

        $article = new Blog();
        $article->user_id = auth()->user()->id;
        $article->title = $request->get('title');
        $article->content = $request->get('content');
        return $article->save();
    }

    public function update(Request $request, $id)
    {
        $article = Blog::find($id);
        $article->user_id = auth()->user()->id;
        $article->title = $request->get('title', '');
        $article->content = $request->get('content', '');
        return $article->save();
    }
}

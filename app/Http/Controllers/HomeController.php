<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except([
            'about',
            'master',
            'blog',
            'article',
            'master_practitioner',
            'practitioner'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('other.about');
    }

    public function master()
    {
        return view('other.master');
    }

    public function blog()
    {
        return view('other.blog');
    }

    public function master_practitioner()
    {
        return view('other.master-practitioner');
    }

    public function practitioner()
    {
        return view('other.practitioner');
    }

    public function article()
    {
        return view('other.article');
    }
}

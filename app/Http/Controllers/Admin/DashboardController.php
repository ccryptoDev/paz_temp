<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function __construct()
    {
    }

    public function index()
    {
        $active = "dashboard";
        return view('admin.dashboard.index',compact('active'));
    }
}

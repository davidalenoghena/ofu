<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $letter = DB::table('newsletters')->get();
        $blog = DB::table('blogs')->get();
        $opportunity = DB::table('opportunities')->get();
        $intern = DB::table('internships')->get();
        return view('admin.home', compact('letter','blog', 'opportunity', 'intern'));
    }

    public function users()
    {
        return view('admin.users'); 
    }
}
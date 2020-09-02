<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = DB::table('blogs')->get();
        return view('admin.blog', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */

    public function disableBlogs(Request $request, $id)
    {
        $blogs = blog::find($id);
        $blogs->status = 0;
        $blogs->save();

        $request->session()->flash('success', 'Blog Post unpublished');
        return redirect()->back();
    }

    public function enableBlogs(Request $request, $id)
    {
        $blogs = blog::find($id);
        $blogs->status = 1;
        $blogs->save();

        $request->session()->flash('success', 'BLog Post published');
        return redirect()->back();
    }

    public function disabledBlogsList()
    {
        $blogs = blog::where('status', 0)->orderBy('created_at', 'desc')->get();
        $active_menu = 'disabled-blogs';
        return view('admin.disabled-blogs', compact('blogs', 'active_menu'));
    }

    public function destroy(blog $blog)
    {
        //
    }

}

<?php

namespace App\Http\Controllers;

use App\blog;
use Image;
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
        $blogs = DB::table('blogs')->where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('admin.blog.blog', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'blog_title' => 'required',
            'blog_post' => 'required',
            'author' => 'required',
            'category' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $path = public_path().'/images/blog/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name); 
        
        $blog = new blog();

        $blog->blog_title = $request->blog_title;
        $blog->blog_post = $request->blog_post;
        $blog->author = $request->author;
        $blog->category = $request->category;
        $blog->img = $name;  
        $blog->status = 1;

        $blog->save(); 

        $request->session()->flash('success', 'Blog created successfully');
        return redirect()->route('admin.blog');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        $blog_data = blog::find($blog);   
        return view('admin.blog.blog_show', compact('blog_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = blog::find($id);
        return view('admin.blog.edit_blog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = blog::find($id);

        $this->validate($request, [
            'blog_title' => 'required',
            'blog_post' => 'required',
            'author' => 'required',
            'category' => 'required',
            
        ]);

        if ($request->hasFile('img')){ 

        $path = public_path().'/images/blog/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name); 
        $blog->img = $name; 
        }

        $blog->blog_title = $request->blog_title;
        $blog->blog_post = $request->blog_post;
        $blog->author = $request->author;
        $blog->status = 1;
        $blog->category = $request->category;
        $blog->save(); 

        return redirect('/admin/blog')->with('success', 'Blog Updated successfully');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */

    public function disableBlog(Request $request, $id)
    {
        $blog = blog::find($id);
        $blog->status = 0;
        $blog->save();

        $request->session()->flash('success', 'Blog Post unpublished');
        return redirect()->back();
    }

    public function enableBlog(Request $request, $id)
    {
        $blog = blog::find($id);
        $blog->status = 1;
        $blog->save();

        $request->session()->flash('success', 'BLog Post published');
        return redirect()->back();
    }

    public function disabledBlogList()
    {
        $blogs = DB::table('blogs')->where('status', 0)->orderBy('created_at', 'desc')->get();
        return view('admin.blog.disabled-blog', ['blogs' => $blogs]);
    }


    public function destroy(blog $blog)
    {
        //
    }

}

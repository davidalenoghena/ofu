<?php

namespace App\Http\Controllers;

use App\Internship;
use Illuminate\Http\Request;
use Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intern = DB::table('internships')->orderBy('created_at', 'desc')->get();
        return view('admin.internship.intern', ['intern' => $intern]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.internship.create_intern');
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
            'name' => 'required',
            'location' => 'required',
            'eligibility_slug' => 'required',
            'status_slug' => 'required',
            'detail' => 'required',
            'about' => 'required',
            'status' => 'required',
            'eligibility' => 'required',
            'how_to_apply' => 'required',
            'description' => 'required',
            'note' => 'required',
            'word' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $path = public_path().'/images/internship/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name); 
        
        $intern = new Internship();

        $intern->name = $request->name;
        $intern->location = $request->location;
        $intern->eligibility_slug = $request->eligibility_slug;
        $intern->status_slug = $request->status_slug;
        $intern->detail = $request->detail; 
        $intern->about = $request->about;
        $intern->status = $request->status;
        $intern->eligibility = $request->eligibility;
        $intern->how_to_apply = $request->how_to_apply;
        $intern->description = $request->description;
        $intern->note = $request->note;
        $intern->word = $request->word;
        $intern->img = $name;

        $intern->save(); 

        $request->session()->flash('success', 'Internship created successfully');
        return redirect()->route('admin.intern');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function show($internship)
    {
        $intern_data = Internship::find($internship);   
        return view('admin.internship.intern_show', compact('intern_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $intern = Internship::find($id);
        return view('admin.internship.edit_intern', compact('intern'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $intern = Internship::find($id);

        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'eligibility_slug' => 'required',
            'status_slug' => 'required',
            'detail' => 'required',
            'about' => 'required',
            'status' => 'required',
            'eligibility' => 'required',
            'how_to_apply' => 'required',
            'description' => 'required',
            'note' => 'required',
            'word' => 'required',
        ]);

        if ($request->hasFile('img')){ 

        $path = public_path().'/images/internship/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name); 
        $intern->img = $name; 
        }

        $intern->name = $request->name;
        $intern->location = $request->location;
        $intern->eligibility_slug = $request->eligibility_slug;
        $intern->status_slug = $request->status_slug;
        $intern->detail = $request->detail;
        $intern->about = $request->about;
        $intern->status = $request->status;
        $intern->eligibility = $request->eligibility;
        $intern->how_to_apply = $request->how_to_apply;
        $intern->description = $request->description;
        $intern->note = $request->note;
        $intern->word = $request->word;
        $intern->save();

        return redirect('/admin/internship')->with('success', 'Internship Updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        internship::where('id', $id)->delete();   


     return redirect('/admin/internship')->with('success', 'Internship Deleted successfully');
    }
}

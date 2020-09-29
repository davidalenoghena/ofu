<?php

namespace App\Http\Controllers;

use App\Opportunity;
use Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OpportunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opportunity = DB::table('opportunities')->orderBy('created_at', 'desc')->get();
        return view('admin.opportunity.opportunity', ['opportunity' => $opportunity]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.opportunity.create_opportunity');
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
            'worth' => 'required',
            'eligibility_slug' => 'required',
            'status_slug' => 'required',
            'detail' => 'required',
            'about' => 'required',
            'status' => 'required',
            'eligibility' => 'required',
            'how_to_apply' => 'required',
            'requirements' => 'required',
            'note' => 'required',
            'word' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $path = public_path().'/images/opportunity/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name); 
        
        $opportunity = new Opportunity();

        $opportunity->name = $request->name;
        $opportunity->worth = $request->worth;
        $opportunity->eligibility_slug = $request->eligibility_slug;
        $opportunity->status_slug = $request->status_slug;
        $opportunity->detail = $request->detail;
        $opportunity->about = $request->about;
        $opportunity->status = $request->status;
        $opportunity->eligibility = $request->eligibility;
        $opportunity->how_to_apply = $request->how_to_apply;
        $opportunity->requirements = $request->requirements;
        $opportunity->note = $request->note;
        $opportunity->word = $request->word;
        $opportunity->img = $name;

        $opportunity->save(); 

        $request->session()->flash('success', 'Opprotunity created successfully');
        return redirect()->route('admin.opportunity');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function show($opportunity)
    {
        $opportunity_data = Opportunity::find($opportunity);   
        return view('admin.opportunity.opportunity_show', compact('opportunity_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opportunity = Opportunity::find($id);
        return view('admin.opportunity.edit_opportunity', compact('opportunity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $opportunity = Opportunity::find($id);

        $this->validate($request, [
            'name' => 'required',
            'worth' => 'required',
            'eligibility_slug' => 'required',
            'status_slug' => 'required',
            'detail' => 'required',
            'about' => 'required',
            'status' => 'required',
            'eligibility' => 'required',
            'how_to_apply' => 'required',
            'requirements' => 'required',
            'note' => 'required',
            'word' => 'required',
        ]);

        if ($request->hasFile('img')){ 

        $path = public_path().'/images/opportunity/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name); 
        $opportunity->img = $name; 
        }

        $opportunity->name = $request->name;
        $opportunity->worth = $request->worth;
        $opportunity->eligibility_slug = $request->eligibility_slug;
        $opportunity->status_slug = $request->status_slug;
        $opportunity->detail = $request->detail;
        $opportunity->about = $request->about;
        $opportunity->status = $request->status;
        $opportunity->eligibility = $request->eligibility;
        $opportunity->how_to_apply = $request->how_to_apply;
        $opportunity->requirements = $request->requirements;
        $opportunity->note = $request->note;
        $opportunity->word = $request->word;
        $opportunity->save();

        return redirect('/admin/opportunities')->with('success', 'Opportunity updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        opportunity::where('id', $id)->delete();   


     return redirect('/admin/opportunities')->with('success', 'Opportunity deleted successfully');
    }
}

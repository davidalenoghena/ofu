<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Newsletter;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        $letter = DB::table('newsletters')->orderBy('created_at', 'desc')->get();
        return view('admin.newsletter', ['letter' => $letter]);
    }

    public function destroy($id)
    {
        Newsletter::where('id', $id)->delete();   
     return redirect('/admin/subscribers')->with('success', 'Subscriber Deleted successfully');
    }

}

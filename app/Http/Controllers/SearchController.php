<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Opportunity;

class SearchController extends Controller
{
    public function opportunitiessearch(Request $request)
    {
        $results = DB::table('opportunities')
            ->select(DB::raw("*"))
            ->where('name', 'like', '%'.$request->search.'%')
            ->paginate(20);
        return view('pages.search.opportunities',
        [
            'results' =>  $results,
        ]);
    }

    public function internshipssearch(Request $request)
    {
        $results = DB::table('internships')
            ->select(DB::raw("*"))
            ->where('name', 'like', '%'.$request->search.'%')
            ->paginate(20);
        return view('pages.search.internships',
        [
            'results' =>  $results,
        ]);
    }
}

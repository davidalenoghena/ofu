<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Opportunity;

class SearchController extends Controller
{
    public function opportunitiessearch(Request $request)
    {
        $your_search = $request->search;
        
        $count = DB::table('opportunities')->count();
        $op_ex = DB::table('opportunities')
                            ->select(DB::raw("*"))
                            ->where('name', 'like', '%'.$request->search.'%')
                            ->where('status_slug', 0)
                            ->paginate(($count+10));
        $op_av = DB::table('opportunities')
                            ->select(DB::raw("*"))
                            ->where('name', 'like', '%'.$request->search.'%')
                            ->where('status_slug', 1)
                            ->paginate(($count+10));
        $op_not_av = DB::table('opportunities')
                            ->select(DB::raw("*"))
                            ->where('name', 'like', '%'.$request->search.'%')
                            ->where('status_slug', 2)
                            ->paginate(20);
        return view('pages.search.opportunities',
        [
            'op_ex' =>  $op_ex,
            'op_av' => $op_av,
            'op_not_av' => $op_not_av,
            'your_search' => $your_search,
        ]);
    }

    public function internshipssearch(Request $request)
    {
        $count = DB::table('internships')->count();
        $your_search = $request->search;
        $in_cl = DB::table('internships')
                            ->select(DB::raw("*"))
                            ->where('name', 'like', '%'.$request->search.'%')
                            ->orWhere('location', 'like', '%' .$request->search. '%')
                            ->where('status_slug', 0)
                            ->paginate(($count+10));
        $in_av = DB::table('internships')
                            ->select(DB::raw("*"))
                            ->where('name', 'like', '%'.$request->search.'%')
                            ->orWhere('location', 'like', '%' .$request->search. '%')
                            ->where('status_slug', 1)
                            ->paginate(($count+10));
        $in_not_av = DB::table('internships')
                            ->select(DB::raw("*"))
                            ->where('name', 'like', '%'.$request->search.'%')
                            ->orWhere('location', 'like', '%' .$request->search. '%')
                            ->where('status_slug', 2)
                            ->paginate(20);
        return view('pages.search.internships',
        [
            'in_cl' =>  $in_cl,
            'in_av' => $in_av,
            'in_not_av' => $in_not_av,
            'your_search' => $your_search,
        ]);
    }
}

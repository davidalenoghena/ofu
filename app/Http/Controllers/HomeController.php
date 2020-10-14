<?php

namespace App\Http\Controllers;

use App\blog;
use App\Opportunity;
use App\Internship;
use App\Mail\SendMailable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blog_count = DB::table('blogs')->count();
        $ran_blog = DB::table('blogs')
                            ->inRandomOrder()
                            ->first();

        $blog1 = DB::table('blogs')->find(($blog_count));
        $blog2 = DB::table('blogs')->find(($blog_count - 1));
            
        $op_first = DB::table('opportunities')
                            ->where('status_slug', 0)
                            ->orderBy('id', 'desc')
                            ->first();
        $in_first = DB::table('internships')
                            ->where('status_slug', 0)
                            ->orderBy('id', 'desc')
                            ->first();
        return view('pages.home',
        [
            'op_first' =>  $op_first,
            'in_first' => $in_first,
            'blog1' => $blog1,
            'blog2' => $blog2,
            'ran_blog' => $ran_blog
        ]);
    }
       public function about_us()
    {
        return view('pages.about_us');
    }
    public function mail(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => '',
            'message' => 'required'
        ]);

        $admin_mail = 'ofuapp@gmail.com';
        \Mail::to($admin_mail)->send(new SendMailable($data));
        return redirect(route('contact'))->with('message', 'Thank You for your message. We will be in touch.');
    }
    public function contact_us()
    {
        return view('pages.contact_us');
    }
    public function blog()
    {
        $ran_blogs = DB::table('blogs')
                            ->inRandomOrder()
                            ->paginate(6);
        $blogs = DB::table('blogs')
                            ->paginate(9);
        $blog1 = DB::table('blogs')->latest()->first();
        $blog2 = DB::table('blogs')->latest()->skip(1)->first();
        $blog3 = DB::table('blogs')->latest()->skip(2)->first();
        return view('pages.blog',
        [
            'blogs' => $blogs,
            'blog1' => $blog1,
            'blog2' => $blog2,
            'blog3' => $blog3,
            'ran_blogs' => $ran_blogs
        ]
    );
    }
    public function singleblog($blog)
    {
        $blog_data = blog::find($blog);
        $blog_count = DB::table('blogs')->count();
        $ran_blogs = DB::table('blogs')
                            ->inRandomOrder()
                            ->paginate(6);
        $blogs = DB::table('blogs')
                            ->paginate(6);
                            // ->get();
        $blog1 = DB::table('blogs')->find(($blog_count));
        $blog2 = DB::table('blogs')->find(($blog_count - 1));
        $blog3 = DB::table('blogs')->find(($blog_count - 2));
        $blog4 = DB::table('blogs')->find(($blog_count - 3));
        $blog5 = DB::table('blogs')->find(($blog_count - 4));
        return view('pages.single_blog',
        [
            'blog_data' => $blog_data,
            'blogs' => $blogs,
            'blog1' => $blog1,
            'blog2' => $blog2,
            'blog3' => $blog3,
            'blog4' => $blog4,
            'blog5' => $blog5,
            'ran_blogs' => $ran_blogs
        ]
    );
    }
    public function opportunities()
    {
        $count = DB::table('opportunities')->count();
        $op_ex = DB::table('opportunities')
                            ->where('status_slug', 0)
                            ->orderBy('updated_at', 'desc')
                            ->paginate(($count+10));
        $op_av = DB::table('opportunities')
                            ->where('status_slug', 1)
                            ->orderBy('updated_at', 'desc')
                            ->paginate(($count+10));
        $op_not_av = DB::table('opportunities')
                            ->where('status_slug', 2)
                            ->orderBy('updated_at', 'desc')
                            ->paginate(10);
        return view('pages.opportunities',
        [
            'op_ex' =>  $op_ex,
            'op_av' => $op_av,
            'op_not_av' => $op_not_av
        ]);
    }
    public function singleopportunity($opportunity){
        $op_data = Opportunity::find($opportunity);
        $count = DB::table('opportunities')->count();
        $blog_count = DB::table('blogs')->count();

        $previous = Opportunity::where('id', '<', $opportunity)->max('id');
        $previous_data = Opportunity::find($previous);
        
        $next = Opportunity::where('id', '>', $opportunity)->min('id');
        $next_data = Opportunity::find($next);

        $all_data = DB::table('opportunities')->get();

        $last_data = DB::table('opportunities')->find($count);

        $op_ex_first = DB::table('opportunities')
                            ->where('status_slug', 0)
                            ->orderBy('updated_at', 'desc')
                            ->first();
        $op_av_first = DB::table('opportunities')
                            ->where('status_slug', 1)
                            ->orderBy('updated_at', 'desc')
                            ->first();
        $op_ex = DB::table('opportunities')
                            ->where('status_slug', 0)
                            ->orderBy('updated_at', 'desc')
                            ->get();
        $op_av = DB::table('opportunities')
                            ->where('status_slug', 1)
                            ->orderBy('updated_at', 'desc')
                            ->get();

        $blog_first = DB::table('blogs')->latest()->first();
        $blog_second = DB::table('blogs')->latest()->skip(1)->first();
        return view('pages.single_opportunity',
        [
            'all_data' => $all_data,
            'last_data' => $last_data,
            'previous_data' => $previous_data,
            'next_data' => $next_data,
            'op_data' =>  $op_data,
            'op_ex' =>  $op_ex,
            'op_av' => $op_av,
            'blog_first' => $blog_first,
            'blog_second' => $blog_second
        ]);
    }
    public function internships()
    {
        $count = DB::table('internships')->count();
        $in_cl = DB::table('internships')
                            ->where('status_slug', 0)
                            ->orderBy('updated_at', 'desc')
                            ->paginate(($count+10));
        $in_av = DB::table('internships')
                            ->where('status_slug', 1)
                            ->orderBy('updated_at', 'desc')
                            ->paginate(($count+10));
        $in_not_av = DB::table('internships')
                            ->where('status_slug', 2)
                            ->orderBy('updated_at', 'desc')
                            ->paginate(10);
        return view('pages.internships',
        [
            'in_cl' =>  $in_cl,
            'in_av' => $in_av,
            'in_not_av' => $in_not_av
        ]);
    }
    public function singleinternship($internship){
        $in_data = Internship::find($internship);
        $count = DB::table('internships')->count();

        $previous = Internship::where('id', '<', $internship)->max('id');
        $previous_data = Internship::find($previous);
        
        $next = Internship::where('id', '>', $internship)->min('id');
        $next_data = Internship::find($next);

        $all_data = DB::table('internships')->get();

        $last_data = DB::table('internships')->find($count);

        $in_cl_first = DB::table('internships')
                            ->where('status_slug', 0)
                            ->orderBy('updated_at', 'desc')
                            ->first();
        $in_av_first = DB::table('internships')
                            ->where('status_slug', 1)
                            ->orderBy('updated_at', 'desc')
                            ->first();
        $in_cl = DB::table('internships')
                            ->where('status_slug', 0)
                            ->orderBy('updated_at', 'desc')
                            ->get();
        $in_av = DB::table('internships')
                            ->where('status_slug', 1)
                            ->orderBy('updated_at', 'desc')
                            ->get();
        $blog_first = DB::table('blogs')->latest()->first();
        $blog_second = DB::table('blogs')->latest()->skip(1)->first();
        return view('pages.single_internship',
        [
            'all_data' => $all_data,
            'last_data' => $last_data,
            'previous_data' => $previous_data,
            'next_data' => $next_data,
            'in_data' =>  $in_data,
            'in_cl' =>  $in_cl,
            'in_av' => $in_av,
            'blog_first' => $blog_first,
            'blog_second' => $blog_second
        ]);
    }
}

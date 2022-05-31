<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;

class HomeController extends Controller
{
    public function index()
    {

          return view('web/home/index');
    }
    public function blog()
    {
        $latest_blogs = Blog::select('*')->orderBy('id', 'DESC')->where('status',0)->take(3)->get();
        $blogs = Blog::select('*')->orderBy('id', 'DESC')->where('status',0)->get();
        return view('web/home/blog',compact('latest_blogs','blogs'));
    }
    
    public function blog_details($id)
    {
        $blog = Blog::select('*')->find($id);
        return view('web/home/blog_details',compact('blog'));
    }
}

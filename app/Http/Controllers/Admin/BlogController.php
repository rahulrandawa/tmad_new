<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use Hash;
use App\Blog;


class BlogController extends Controller
{

    public function index(){
        $blogs = Blog::select('*')->orderBy('id', 'DESC')->get();
         return view('admin/blog_management/index',compact('blogs'));
       }

    public function addBlogPageShow()
    {
      return view('admin.blog_management.add_blog');
    }

    public function addBlog(Request $request)
    {
        $input = $request->all();
        $blogs =new Blog();
        
        if ($request->file('image')) {
            $blog_img = $request->file('image')->store('public/blogImages');
            $blog_img = 'blogImages/'.pathinfo($blog_img)['basename'];
            $blog_images = $blog_img;
        }else{
        $blog_images = '';
        }

  
     $blogs->title = $input['title'];
     $blogs->heading = $input['heading'];
     $blogs->image = $blog_images;
     $blogs->description = $input['description'];
     $res = $blogs->save();
    return redirect()->route('blog_management')->with('success','Blog Form Submit Successfully.');
     
    }

    public function editBlog($id){
      $blog = Blog::select('*')->find($id);
      return view('admin/blog_management/edit_blog',compact('blog'));
     }

     public function updateBlog(Request $request)
    {
        $input = $request->all();
       
        $blog = Blog::find($input['id']);
        
       if ($request->hasFile('image')) {
          $blogImg = $request->file('image')->store('public/blogImages');
          $blogImg =  'blogImages/'.pathinfo($blogImg)['basename'];
          $blog->image = $blogImg;
       }
  
        $blog->title = $input['title'];
        $blog->heading = $input['heading'];
        $blog->description = $input['description'];
        $res = $blog->save();
      return redirect()->route('blog_management')->with('success','Blog Form Update Successfully.');
      
    }
     public function deleteBlog($id)
     {

         if(Blog::where('id',$id)->delete()){

          return back()->with('success',"Blog delete Successfully.");
         }else{

         return back()->with('error',"Somthing wrong.");
         }
     }
     
     public function statusChange($id)
    {
        $blog = Blog::find($id);
       ($blog->status== 1) ? $blog->status = 0 : $blog->status = 1 ;         
       $res =  $blog->save();
       return back()->with('success',"Blog status change Successfully.");
     
    }

}

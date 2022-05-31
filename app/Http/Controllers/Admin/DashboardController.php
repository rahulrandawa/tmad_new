<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use Carbon\Carbon;
use Str;
use Hash;
use Yajra\DataTables\DataTables;
use App\Rules\MatchOldPassword;
class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('admin/dashboard');
    }


    public function adminProfile(){

        $admin = Admin::select('*')->where('id', Auth::guard('admin')->user()->id)->first();
           return view('admin/auth/adminprofile',compact('admin'));
       }



        public function profileUpdate(Request $request){
           $input = $request->all();
            $request->validate([
               'name' => 'required',
               'phoneNumber' => 'required|digits:10',

           ]);
            //dd($request->file('image'));
           if ($request->file('image')) {
               $profilePic = $request->file('image')->store('public/images');
               $profilePic = 'images/'.pathinfo($profilePic)['basename'];
               $image = $profilePic;
            }else{
             $image = '';
           }

          $data = array(
               'name' => $input['name'],
               'phoneNumber' => $input['phoneNumber'],
               'profile' => $image,
               );


           if(Admin::where('id', Auth::guard('admin')->user()->id)->update($data)){
             return back()->with('success',"Profile update successfully.");
           }else{
             return back()->with('error',"Somthing wrong.");
           }

       }

       public function changePassword(Request $request){
          $input = $request->all();

          $request->validate([
               'currentpassword' => ['required', new MatchOldPassword],
               'newpassword' => ['required'],
               'confirmpassword' => ['required','same:newpassword'],
           ],
           [
           'currentpassword.required' => 'The current password field is required.',
           'newpassword.required' => 'The new password field is required.',
           'confirmpassword.required' => 'The confirm password field is required.',
           'confirmpassword.same' => 'The confirm password and new password must match.'
           ]);

         if(Admin::where('id', Auth::guard('admin')->user()->id)->update(['password' => Hash::make($input['newpassword'])])){
             return back()->with('success',"Password Chanage Successfully.");
           }else{
             return back()->with('error',"Somthing wrong.");
           }

       }
       
        public function blog_management(){

        return view('admin/blog_management/index');
       }
}

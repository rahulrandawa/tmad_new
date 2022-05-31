<?php

namespace App\Http\Controllers\Web;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use App\Contact;
use App\Enquiry;
use Validators;

class ContactController extends Controller
{
    public function index(Request $request){
       $input = $request->all();

    //    $validator = Validator::make($request->all(), [
    //     'name' => 'required|max:120',
    //     'email' => 'required|email|unique:contacts',
    //     'contactNumber' => 'required|min:10|max:10|numeric',
    //     'company' => 'required',
    //     'message' => 'required',
    // ]);

    // if ($validator->fails()) {
    //     return redirect('/')
    //                 ->withErrors($validator)
    //                 ->withInput();
    // }


       $users =new Contact();
       $users->name = $input['name'];
       $users->email = $input['email'];
       $users->company = $input['company'];
       $users->contactNumber = $input['contactNumber'];
       $users->message = $input['message'];
       $res = $users->save();
        if($res){
            $details = [
                'title' => 'TMAD Contact',
                'name' => $input['name'],
                'email'=> $input['email'],
                'contact_no' => $input['contactNumber'],
                'company' => $input['company'],
                'message' => $input['message']
            ];

            \Mail::to('vipin.infograins@gmail.com')->send(new \App\Mail\MyTestMail($details));

           return  redirect()->route('home')->with('success','Message sent');

           }else{
             return  redirect()->route('home')->with('error','Somthing wrong');
           }

    }


    public function enquiry_insert(Request $request){
        $input = $request->all();
        //dd($input);
    //     $validator = Validator::make($request->all(), [
    //      'name' => 'required|max:120',
    //      'email' => 'required|email|unique:contacts',
    //      'phone_no' => 'required|min:10|max:10|numeric',
    //      'country' => 'required',
    //      'requirement' => 'required',
    //      'file' => 'required',
    //  ]);

    //  if ($validator->fails()) {
    //      return redirect('/')
    //                  ->withErrors($validator)
    //                  ->withInput();
    //  }


     if ($request->file('file')) {
        $docsFile = $request->file('file')->store('public/docs');
        $docsFile = 'docs/'.pathinfo($docsFile)['basename'];
        $file = $docsFile;
     }else{
      $file = '';
    }
    //dd(new Enquiry());
     $enquiries =new Enquiry();
     $enquiries->name = $input['name'];
     $enquiries->email = $input['email'];
     $enquiries->country = $input['country'];
     $enquiries->phone_no = $input['phone_no'];
     $enquiries->requirement = $input['requirement'];
     $enquiries->file = $file;
     $res = $enquiries->save();
     //dd( $res);
      if($res){
        $details = [
            'title' => 'TMAD Enquiry',
            'name' => $input['name'],
            'email' => $input['email'],
            'phone_no' => $input['phone_no'],
            'country' => $input['country'],
            'requirement' => $input['requirement']
        ];

        \Mail::to('vipin.infograins@gmail.com')->send(new \App\Mail\EnquiryMail($details));
      return back()->with('success','Enquiry Form Submit Successfully.');
      }else{
      return back()->with('error','Somthing wrong');
      }
    }
}

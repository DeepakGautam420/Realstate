<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function contactUs()
    {
        return view('frontend.contactUs');
    }

    public function storeContactUs(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'subject' => 'required',
        ]);
        // dd($request->mobile_number);
            $data = ContactUs::create([
                'name' => $request->name,
                'subject' => $request->subject,
                'email' => $request->email,
                'message'=>$request->message,
            ]);
            // dd($data);
            if($data){
                return redirect()->back()->with('success', 'Successfully ! Submitted');
            // Handle the exception, display an error message, or log the error
            // For example:
            }else{
                return redirect()->back()->with('error', 'Something Went Wrong');
            }

    }

    public function aboutUs()
    {
        return view('frontend.aboutUs');
    }
}

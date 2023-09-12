<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
                'status'=>'1',
            ]);
            // dd($data);
            if($data){
                return redirect(route('contactUs'))->with('success', 'Successfully ! Submitted');
            // Handle the exception, display an error message, or log the error
            // For example:
            }else{
                return redirect(route('contactUs'))->with('error', 'Something Went Wrong');
            }

    }

    public function aboutUs()
    {
        return view('frontend.aboutUs');
    }

    public function contactUsList()
    {
        $contactList=ContactUs::where('status','1')->get();
        return view('admin.contactUsList.contactUsList',compact('contactList'));
    }

    public function deleteContactUs($id)
    {
        $id = Crypt::decrypt($id);
        $delprpt = ContactUs::find($id)->where('status','1')->update(['status'=>'0']);

        if ($delprpt) {
            return redirect()->back()->with('success', 'Successfully ! Deleted');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }

    
}

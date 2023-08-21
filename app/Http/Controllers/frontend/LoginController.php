<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserSignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class LoginController extends Controller
{
    //
    public function user()
    {
        return view('frontend.login');
    }
    public function signUp()
    {
        return view('frontend.userSignUp');
    }

    public function storeSignUp(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password'=>'required',
            'mobile_number' => 'required',
        ]);
        // dd($request->mobile_number);
            $data = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile'=>$request->mobile_number,
                'password'=>Hash::make($request->password),
            ]);
            // dd($data);
            if($data){
                return redirect()->back()->with('success', 'Sign-in successfully !');
            // Handle the exception, display an error message, or log the error
            // For example:
            }else{
                return redirect()->back()->with('error', 'Sign-in not successfully !');
            }


    }

    public function userLoginStore(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me)){
            $role=Auth::user()->roles[0]->name;
            return redirect()->route('admin.dashboard')->with('success', 'Welcome ' . $role . ' !');
        }else{
            return redirect()->back()->with('error', 'Invalid Username or Password !');
        }
    }

   
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function register()
    {
        return view('admin.gate.register');
    }

    public function registerStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'mobile' => 'required',
            'role' => 'required',
        ]);

        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
        ]);
        if ($data) {
            $data->assignRole($request->role);
            return redirect()->back()->with('success', 'User registerd successfully !');
        } else {
            return redirect()->route('userLogin')->with('error', 'User not register successfully !');
        }
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function loginStore(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->username, 'password' => $request->password], $request->remember_me)) {

            $role = Auth::user()->roles[0]->name;
            return redirect()->route('admin.dashboard')->with('success', 'Welcome ' . $role . ' !');
        } else {
            return redirect()->back()->with('error', 'Invalid Username or Password !');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.logout')->with('success', 'Logout Successfully !');
    }

    public function userProfile()
    {
        return view('admin.users.userProfile');
    }

    public function changePassword()
    {
        return view('admin.users.changePassword');
    }

    public function storeChangePassword(Request $request)
    {
        $request->validate([
            'password' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        return redirect()->route('userLogin')->with('success','Your Passworcd Has Been Changed');
    }
}

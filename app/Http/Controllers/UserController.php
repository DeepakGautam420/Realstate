<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $users = User::all();
        return view('admin.users.users', compact('roles', 'users'));
    }

    public function userCreate(Request $request,)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'roles.*' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $role_name = [];
        foreach ($request->roles as $role) {
            $roles = Role::where('id', $role)->first();
            $name = $roles->name;
            array_push($role_name, $name);
        }
        if ($user) {
            $user->assignRole($role_name);
            return redirect()->back()->with('success', 'User registerd successfully !');
        } else {
            return redirect()->back()->with('error', 'User not register successfully !');
        }
    }

    public function userEdit($id)
    {
        $id = Crypt::decrypt($id);
        $roles = Role::all();
        $users = User::all();
        $editUser = User::find($id);
        return view('admin.users.users', compact('roles', 'users', 'editUser'));
    }

    public function userUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'roles.*' => 'required'
        ]);

        $user = User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        $role_name = [];
        foreach ($request->roles as $role) {
            $roles = Role::where('id', $role)->first();
            $name = $roles->name;
            array_push($role_name, $name);
        }
        if ($user) {
            User::find($id)->syncRoles($role_name);
            return redirect()->back()->with('success', 'User updated successfully !');
        } else {
            return redirect()->back()->with('error', 'User not update successfully !');
        }
    }

    public function userDelete($id)
    {
        $id = Crypt::decrypt($id);
        $delete = User::find($id);
        if ($delete) {
            return redirect()->back()->with('success', 'User deleted successfully !');
        } else {
            return redirect()->back()->with('error', 'User not delete successfully !');
        }
    }
}
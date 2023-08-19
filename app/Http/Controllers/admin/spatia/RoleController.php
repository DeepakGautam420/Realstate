<?php

namespace App\Http\Controllers\admin\spatia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function roles()
    {
        $roles = Role::get();
        return view('admin.spatia.roles', compact('roles'));
    }

    public function roleCreate(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $roles = Role::create([
            'name' => $request->name,
        ]);
        if ($roles) {
            return redirect()->back()->with('success', 'Roles Created Successfully !');
        } else {
            return redirect()->back()->with('error', 'Roles not Create Successfully !');
        }
    }

    public function roleEdit($id)
    {
        $id = Crypt::decrypt($id);
        $editRoles = Role::find($id);
        $roles = Role::all();
        return view('admin.spatia.roles', compact('roles', 'editRoles'));
    }

    public function roleUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $roles = Role::find($id)->update([
            'name' => $request->name,
        ]);
        if ($roles) {
            return redirect()->back()->with('success', 'Roles Updated Successfully !');
        } else {
            return redirect()->back()->with('error', 'Roles not Update Successfully !');
        }
    }

    public function roleDelete($id)
    {
        $roles = Role::find($id)->delete();
        if ($roles) {
            return redirect()->back()->with('success', 'Roles Deleted Successfully !');
        } else {
            return redirect()->back()->with('error', 'Roles not Delete Successfully !');
        }
    }
}

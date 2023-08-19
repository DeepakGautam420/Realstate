<?php

namespace App\Http\Controllers\admin\spatia;

use App\Http\Controllers\Controller;
use App\Models\PermissionName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function permissions()
    {
        $permissionsName = PermissionName::all();
        return view('admin.spatia.permissions', compact('permissionsName'));
    }

    public function permissionsCreate(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $permission = PermissionName::create(['name' => $request->name]);
        Permission::create(['name' => $request->name,'perm_id'=>$permission->id]);
        Permission::create(['name' => $request->name . '_create','perm_id'=>$permission->id]);
        Permission::create(['name' => $request->name . '_edit','perm_id'=>$permission->id]);
        Permission::create(['name' => $request->name . '_delete','perm_id'=>$permission->id]);
        Permission::create(['name' => $request->name . '_read','perm_id'=>$permission->id]);
        if ($permission) {
            return redirect()->back()->with('success', 'Permission Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Permission Not Add Successfully');
        }
    }

    public function rolePermissions()
    {
        $roles = Role::all();
        return view('admin.spatia.role_permission', compact('roles'));
    }

    public function rolePermissionsFatch(Request $request)
    {
        $request->validate([
            'roles'=>'required',
        ]);
        $selectRoles=Role::find($request->roles);
        $hasPermissions=Permission::all();
        $hasPermissionsName=PermissionName::all();
       return view('admin.spatia.fatch_permission',compact('selectRoles','hasPermissions','hasPermissionsName'));
    }

    public function assingPermissions(Request $request){
        $request->validate([
            'roleid'=>'required|exists:roles,id',
            'rolepermissions'=>'required|array',
        ]);
        $role=Role::find($request->roleid);
        $role->syncPermissions($request->rolepermissions);
        return redirect()->route('admin.rolePermissions')->with('success','Permission Assigned Successfully');
    }
}

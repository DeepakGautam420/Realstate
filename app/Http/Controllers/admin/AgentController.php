<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AgentController extends Controller
{
    //
    public function addProperty()
    {
        return view('admin.property.addProperty');
    }

    public function storeAgentDetail(Request $request)
    {

        $request->validate([
            'role' => 'required',
            'fname' => 'required',
            'number' => 'required',
            'email' => 'required',
            'for_sale' => 'required',
            'property_type' => 'required',
            'posting_as' => 'required',
            'property_location' => 'required',
            'new_project_socity' => 'required',
            'property_address' => 'required',
            'desc' => 'required',
            'carpet_area' => 'required',
            'super_area' => 'required',
            'date' => 'required',
            'monthly_rent' => 'required',
            'picture.*' => 'required|image',
            'security_amnt' => 'required',
            'managment_charge' => 'required',
            'monthly_status' => 'required',
        ]);
        $otherpic = [];

        if ($request->hasFile('picture')) {
            foreach ($request->file('picture') as $file) {
                $opn = $file->getClientOriginalName();
                $op = explode('.', $opn);
                $name = $op[0] . '-' . time() . '-' . rand(0, 99) . '.' . $op[1];
                $name = str_replace(' ', '-', trim($name, ' '));
                $name = strtolower($name);
                $file->move(public_path('upload/product'), $name);
                $otherpic[] = $name;
            }
        }

        $res = Agent::create([
            'role' => $request->role,
            'name' => $request->fname,
            'number' => $request->number,
            'email' => $request->email,
            'for_sale' => $request->for_sale,
            'property_type' => $request->property_type,
            'posting_as' => $request->posting_as,
            'property_location' => $request->property_location,
            'new_project_socity' => $request->new_project_socity,
            'property_address' => $request->property_address,
            'carpet_area' => $request->carpet_area,
            'super_area' => $request->super_area,
            'date' => $request->date,
            'monthly_rent' => $request->monthly_rent,
            'monthly_status' => $request->monthly_status,
            'managment_charge' => $request->managment_charge,
            'description' => $request->desc,
            'security_amnt' => $request->security_amnt,
            'picture' => json_encode($otherpic),

        ]);
        if ($res) {
            return redirect()->back()->with('success', 'Successfully');
        } else {
            return redirect()->back()->with('error', 'Some Thing Went Wrong');
        }
    }

    public function showAgentDetail()
    {
        $properties = Agent::paginate(4);
        return view('admin.property.showProperty', compact('properties'));
    }

    public function editProperty($id)
    {
        $id = Crypt::decrypt($id);
        $editProperty = Agent::find($id);
        return view('admin.property.addProperty', compact('editProperty'));
    }

    public function updateAgentDetail(Request $request, $id)
    {

        // $request->validate([
        //     'role'=>'required',
        //     'fname' => 'required',
        //     'number' => 'required',
        //     'email' => 'required',
        //     'for_sale' => 'required',
        //     'property_type' => 'required',
        //     'posting_as' => 'required',
        //     'property_location' => 'required',
        //     'new_project_socity' => 'required',
        //     'property_address' => 'required',
        //     'desc' => 'required',
        //     'carpet_area' => 'required',
        //     'super_area' => 'required',
        //     'date' => 'required',
        //     'monthly_rent' => 'required',
        //     'picture.*' => 'required|image',
        //     'security_amnt' => 'required',
        //     'managment_charge' => 'required',   
        //     'monthly_status' => 'required',
        // ]);
        $otherpic = [];

        if ($request->hasFile('picture')) {
            foreach ($request->file('picture') as $file) {
                $opn = $file->getClientOriginalName();
                $op = explode('.', $opn);
                $name = $op[0] . '-' . time() . '-' . rand(0, 99) . '.' . $op[1];
                $name = str_replace(' ', '-', trim($name, ' '));
                $name = strtolower($name);
                $file->move(public_path('upload/product'), $name);
                $otherpic[] = $name;
            }
        }

        $res = Agent::find($id)->update([
            'role' => $request->role,
            'name' => $request->fname,
            'number' => $request->number,
            'email' => $request->email,
            'for_sale' => $request->for_sale,
            'property_type' => $request->property_type,
            'posting_as' => $request->posting_as ?? '',
            'property_location' => $request->property_location,
            'new_project_socity' => $request->new_project_socity,
            'property_address' => $request->property_address,
            'carpet_area' => $request->carpet_area,
            'super_area' => $request->super_area,
            'date' => $request->date ?? '',
            'monthly_rent' => $request->monthly_rent,
            'monthly_status' => $request->monthly_status,
            'managment_charge' => $request->managment_charge,
            'description' => $request->desc,
            'security_amnt' => $request->security_amnt,
            'picture' => json_encode($otherpic),

        ]);
        if ($res) {
            return redirect()->back()->with('success', 'Successfully Updated');
        } else {
            return redirect()->back()->with('error', 'Some Thing Went Wrong');
        }
    }

    public  function deleteAgent($id)
    {
        $id = Crypt::decrypt($id);
        $agent = Agent::find($id)->delete();

        if ($agent) {
            return redirect()->back()->with('success', 'Successfully Deleted');
        } else {
            return redirect()->back()->with('error', 'Some Thing Went Wrong');
        }
    }

    public function agentList()
    {
        $agent = User::where('role', 'agent')->paginate(4);
        return view('admin.property.agentList', compact('agent'));
    }

    public function ownerList()
    {
        $owner = User::where('role', 'owner')->paginate(4);
        return view('admin.property.ownerList', compact('owner'));
    }
    public function editAgent($id)
    {
        $id = Crypt::decrypt($id);
        $agent = User::where('role', 'agent')->find($id);
        return view('admin.gate.register', compact('agent'));
    }

    public function updateAgent(Request $request, $id)
    {
        $data = User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);
        if ($data) {
            // $data->assignRole('user');
            return redirect()->back()->with('success', 'User updated successfully !');
        } else {
            return redirect()->back()->with('error', 'User not updated successfully !');
        }
    }

    public function agentDelete($id)
    {
        $id = Crypt::decrypt($id);
        $agent = User::where('role', 'agent')->find($id);
        $agnt = $agent->delete();

        if ($agnt) {
            return redirect()->back()->with('success', 'Successfully Deleted');
        } else {
            return redirect()->back()->with('error', 'Some Thing Went Wrong');
        }
    }

    public function ownerEdit(Request $request, $id)
    {

        $id = Crypt::decrypt($id);
        $owner = User::where('role', 'owner')->find($id);
        // dd($owner);
        return view('admin.gate.register', compact('owner'));
    }
    public function proertyEmage($img)
    {
        $imgs = $img;
        return view('admin.property.images', compact('imgs'));
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\UpcomingSale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{public function UpcomingSale(){
    $property = UpcomingSale::get();
    // dd($property);
    return view('admin.property.upcoming_property',compact('property'));
}
public function StoreUpcomingSale(Request $request)
{
    // dd($request->all());
    $request->validate([
        'oname' => 'required',
        'email' => 'required|email',
        'number' => 'required',
        'address' => 'required',
        'city' => 'required',
        'locality' => 'required',
        'price' => 'required',
        'area' => 'required',
        'desc' => 'required',
        'picture.*' => 'required',
    ]);
    // $otherpic = [];

    if ($request->hasFile('picture')) {
        // foreach ($request->file('picture') as $file) {
            $opn = $request->picture->getClientOriginalName();
            $op = explode('.', $opn);
            $name = $op[0] . '-' . time() . '-' . rand(0, 99) . '.' . $op[1];
            $name = str_replace(' ', '-', trim($name, ' '));
            $name = strtolower($name);
            $request->picture->move(public_path('upload/upcoming'), $name);
            $otherpic = $name;
        // }
    }
    $data = UpcomingSale::create([
        'role' =>Auth::user()->roles[0]->name,
        'login_status' => '1',
        'name' => $request->oname,
        'email' => $request->email,
        'mobile' => $request->number,
        'address' => $request->address,
        'city' => $request->city,
        'state' => $request->state,
        'locality' => $request->locality,
        'price' => $request->price,
        'area' => $request->area,
        'description' => $request->desc,
        'image' => $otherpic??'',
    ]);
    if ($data) {
        return redirect()->back()->with('success', 'Saved successfully!');
    } else {
        return redirect()->back()->with('error', 'Something Went Wrong!');
    }
}

/**
 * edit upcoming Property
 **/
public function EditUpcomingSale($id){
    $id=Crypt::decrypt($id);
    $single = UpcomingSale::find($id);
    $property = UpcomingSale::get();
    return view('admin.property.upcoming_property',compact('single','property'));
}
/**
 * Update upcoming Property
 **/
public function UpdateUpcomingSale(Request $request, $id){
           // dd($request->all());
           $request->validate([
            'oname' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'locality' => 'required',
            'price' => 'required',
            'area' => 'required',
            'desc' => 'required',
        ]);
        // $otherpic = [];

        if ($request->hasFile('picture')) {
            // foreach ($request->file('picture') as $file) {
                $opn = $request->picture->getClientOriginalName();
                $op = explode('.', $opn);
                $name = $op[0] . '-' . time() . '-' . rand(0, 99) . '.' . $op[1];
                $name = str_replace(' ', '-', trim($name, ' '));
                $name = strtolower($name);
                $request->picture->move(public_path('upload/upcoming'), $name);
                $otherpic = $name;
                UpcomingSale::find($id)->update([
                    'image' =>$otherpic,
                ]);
            // }
        }
        $data = UpcomingSale::find($id)->update([
            'role' =>Auth::user()->roles[0]->name,
            'login_status' => '1',
            'name' => $request->oname,
            'email' => $request->email,
            'mobile' => $request->number,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'locality' => $request->locality,
            'price' => $request->price,
            'area' => $request->area,
            'description' => $request->desc,
        ]);
        if ($data) {
            return redirect()->back()->with('success', 'Update successfully!');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
}
public  function deleteUpcomingSale($id)
{
    $id = Crypt::decrypt($id);
    // dd($id);
    $sale = UpcomingSale::find($id)->delete();

    if ($sale) {
        return redirect()->back()->with('success', 'Successfully Deleted');
    } else {
        return redirect()->back()->with('error', 'Some Thing Went Wrong');
    }
}
    
}

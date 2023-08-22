<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\SellProperty;
use Illuminate\Http\Request;

class SellPropertyController extends Controller
{
    //
    public function sellProperty()
    {
        return view('frontend.sellProperty');
    }

    public function storeSellProperty(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'oname' => 'required',
            'email' => 'required|email',
            'number'=>'required',
            'address'=>'required',
            'city'=>'required',
            'locality'=>'required',
            'price'=>'required',
            'area'=>'required',
            'desc'=>'required',
            'picture.*'=>'required'
        ]);
        $otherpic = [];

        if ($request->hasFile('picture')) {
            foreach ($request->file('picture') as $file) {
                $opn = $file->getClientOriginalName();
                $op = explode('.', $opn);
                $name = $op[0] . '-' . time() . '-' . rand(0, 99) . '.' . $op[1];
                $name = str_replace(' ', '-', trim($name, ' '));
                $name = strtolower($name);
                $file->move(public_path('upload/property'), $name);
                $otherpic[] = $name;
            }
        }
       

            $data = SellProperty::create([
                'name' => $request->oname,
                'email' => $request->email,
                'mobile'=>$request->number,
                'address'=>$request->address,
                'city'=>$request->city,
                'locality'=>$request->locality,
                'price'=>$request->price,
                'area'=>$request->area,
                'description'=>$request->desc,
                'image' => json_encode($otherpic),
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

    public function rentPropertyList()
    {
        $rent_lease=Agent::where('for_sale','rent_lease')->get();
        return view('frontend.rentPropertyList',compact('rent_lease'));
    }

    public function pgPropertyList()
    {
        $pg_hostel=Agent::where('for_sale','pg_hostel')->get();
        return view('frontend.pgHostelList',compact('pg_hostel'));
    }


    public function salePropertyList()
    {
        $sale=Agent::where('for_sale','sale')->get();
        return view('frontend.salePropertyList',compact('sale'));
    }

}

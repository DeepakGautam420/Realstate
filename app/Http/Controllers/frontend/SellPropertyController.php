<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\AgentInfo;
use App\Models\ContactUs;
use App\Models\SellProperty;
use App\Models\UpcomingSale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

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
            'number' => 'required',
            'state' => 'required',
            'address' => 'required',
            'city' => 'required',
            'locality' => 'required',
            'price' => 'required',
            'area' => 'required',
            'desc' => 'required',
            'picture.*' => 'required',
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

        if (Auth::user()) {$data = SellProperty::create([
            'role' => Auth::user()->roles[0]->name,
            'login_status' => '1',
            'name' => $request->oname,
            'email' => $request->email,
            'mobile' => $request->number,
            'address' => $request->address,
            'city' => $request->city,
            'locality' => $request->locality,
            'price' => $request->price,
            'area' => $request->area,
            'state' => $request->state,
            'description' => $request->desc,
            'image' => json_encode($otherpic),
        ]);
// dd($data);
            if ($data) {
                return redirect()->back()->with('success', 'Successfully ! Submitted');
// Handle the exception, display an error message, or log the error
// For example:
            } else {
                return redirect()->back()->with('error', 'Something Went Wrong');
            }
        } else {

            $data = SellProperty::create([
                'role' => 'customer',
                'login_status' => '0',
                'name' => $request->oname,
                'email' => $request->email,
                'mobile' => $request->number,
                'address' => $request->address,
                'city' => $request->city,
                'locality' => $request->locality,
                'price' => $request->price,
                'area' => $request->area,
                'state' => $request->state,
                'description' => $request->desc,
                'image' => json_encode($otherpic),
            ]);
            // dd($data);
            if ($data) {
                return redirect()->back()->with('success', 'Successfully ! Submitted');
                // Handle the exception, display an error message, or log the error
                // For example:
            } else {
                return redirect()->back()->with('error', 'Something Went Wrong');
            }
        }
    }

    public function rentPropertyList()
    {
        $rent_lease = Agent::where('for_sale', 'rent_lease')->get();
        return view('frontend.rentPropertyList', compact('rent_lease'));
    }

    public function pgPropertyList()
    {
        $pg_hostel = Agent::where('for_sale', 'pg_hostel')->get();
        return view('frontend.pgHostelList', compact('pg_hostel'));
    }

    public function salePropertyList()
    {
        $sale = SellProperty::get();
        return view('frontend.salePropertyList', compact('sale'));
    }

    public function userProperty()
    {
        $property = SellProperty::get();
        return view('admin.property.userPropertyList', compact('property'));
    }
    public function propertyOverView($id)
    {
        // dd($id);
        $single_pg = Agent::where('for_sale', 'pg_hostel')->find($id);

        return view('frontend.pgHostelSingle', compact('single_pg'));

        // dd($single_product);
    }
    public function rentLeaseOverView($id)
    {
        // dd($id);
        $lease = Agent::where('for_sale', 'rent_lease')->find($id);

        return view('frontend.singleRentLease', compact('lease'));

        // dd($single_product);
    }
    public function saleOverView($id)
    {
        // dd($id);
        $sale = SellProperty::find($id);

        return view('frontend.singleSale', compact('sale'));

        // dd($single_product);
    }

    public function userSellProperty()
    {
        return view('admin.property.userSaleProperty');
    }

    /**
     * Home controller
     */
    public function Home()
    {
        $latest = Agent::orderBy('id', 'desc')
            ->limit(4)->get();

        $UpcomingSale = UpcomingSale::orderBy('id', 'desc')
            ->limit(4)->get();

        $agents = AgentInfo::get();
        // dd($latest);
        return view('frontend/home', compact('latest', 'UpcomingSale', 'agents'));
    }

    public function editUserSellProperty($id)
    {
        $id = Crypt::decrypt($id);
        $propertyEdit = SellProperty::find($id);
        return view('admin.property.userSaleProperty', compact('propertyEdit'));
    }

    public function updateUserSellProperty(Request $request, $id)
    {
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

        { $data = SellProperty::find($id)->update([
            'name' => $request->oname,
            'email' => $request->email,
            'mobile' => $request->number,
            'address' => $request->address,
            'city' => $request->city,
            'locality' => $request->locality,
            'price' => $request->price,
            'area' => $request->area,
            'description' => $request->desc,
            'image' => json_encode($otherpic),
        ]);
            if ($data) {
                return redirect()->back()->with('success', 'Successfully ! Updated');
            } else {
                return redirect()->back()->with('error', 'Something Went Wrong');
            }
        }
    }

    public function deleteSaleProperty($id)
    {
        $id = Crypt::decrypt($id);
        $delprpt = SellProperty::find($id)->delete();
        if ($delprpt) {
            return redirect()->back()->with('success', 'Successfully ! Deleted');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }

    public function searchProduct(Request $request)
    {
        // dd($request);

        if($request->property=='for_sale'){
        //    $search_field= ['name','address','price'];
           $query = DB::table('sell_properties');
           if($request->name){
               $name = $request->name;
               $query->where('name','like','%'.$name.'%');
           }
           if($request->address){
                $address = $request->address;
                $query->where('address','like','%'.$address.'%');
            }
            if($request->price){
                $price = $request->price;
                $query->where('price','like','%'.$price.'%');
            }
            $selldata = $query->get();
            return view('frontend.searchResult',compact('selldata'));

        }elseif($request->property=='for_rent'){
            $query = DB::table('agents');
           if($request->name){
               $name = $request->name;
               $query->where('name','like','%'.$name.'%');
           }
           if($request->address){
                $address = $request->address;
                $query->where('property_address','like','%'.$address.'%');
            }
            if($request->price){
                $price = $request->price;
                $query->where('full_rent','like','%'.$price.'%');
            }
            $rentdata = $query->get();
            return view('frontend.searchResult',compact('rentdata'));
        }


    }

    public function searchProductOne($id)
    {
        $product=Agent::find($id);
        return view('frontend.searchProductOneByOne',compact('product'));
    }


}

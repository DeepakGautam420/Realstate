<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SalePayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.payments.add_payment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payment=SalePayment::get();
        return view('admin.payments.allPaymentList',compact('payment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'fname' => 'required',
            'number' => 'required',
            'email' => 'required',
            'for_sale' => 'required',
            'property_type' => 'required',
            'property_location' => 'required',
            'new_project_socity' => 'required',
            'property_address' => 'required',
            'desc' => 'required',
            'carpet_area' => 'required',
            'super_area' => 'required',
            'to_month' => 'required',
            'picture.*' => 'required|image',
            'security_amnt' => 'required',
            'managment_charge' => 'required',
            'from_month' => 'required',
        ]);
         $image='';
      if($request->hasFile('picture'))
      {
        $image='property-'.time().'-'.rand(0,99).'.'.$request->picture->extension();
        $request->picture->move(public_path('upload/payment'),$image);
        $image ='upload/payment/'.$image;
      }

        $res = SalePayment::create([
            'name' => $request->fname,
            'number' => $request->number,
            'email' => $request->email,
            'for_sale' => $request->for_sale,
            'property_type' => $request->property_type,
            'property_location' => $request->property_location,
            'new_project_socity' => $request->new_project_socity,
            'property_address' => $request->property_address,
            'carpet_area' => $request->carpet_area,
            'super_area' => $request->super_area,
            'from_month' => $request->from_month,
            'to_month' => $request->to_month,
            'managment_charge' => $request->managment_charge,
            'description' => $request->desc,
            'security_amnt' => $request->security_amnt,
            'full_rent' => $request->full_rent,
            'picture' => $image,

        ]);
        if ($res) {
            return redirect()->back()->with('success', 'Successfully');
        } else {
            return redirect()->back()->with('error', 'Some Thing Went Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $payment=SalePayment::find($id);
        return view('admin.payments.add_payment',compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $image='';
      if($request->hasFile('picture'))
      {
        $image='property-'.time().'-'.rand(0,99).'.'.$request->picture->extension();
        $request->picture->move(public_path('upload/payment'),$image);
        $image ='upload/payment/'.$image;
      }

        $res = SalePayment::find($id)->update([
            'name' => $request->fname,
            'number' => $request->number,
            'email' => $request->email,
            'for_sale' => $request->for_sale,
            'property_type' => $request->property_type,
            'property_location' => $request->property_location,
            'new_project_socity' => $request->new_project_socity,
            'property_address' => $request->property_address,
            'carpet_area' => $request->carpet_area,
            'super_area' => $request->super_area,
            'from_month' => $request->from_month,
            'to_month' => $request->to_month,
            'managment_charge' => $request->managment_charge,
            'description' => $request->desc,
            'security_amnt' => $request->security_amnt,
            'full_rent' => $request->full_rent,
            'picture' => $image,

        ]);
        if ($res) {
            return redirect()->back()->with('success', 'Successfully Updated');
        } else {
            return redirect()->back()->with('error', 'Some Thing Went Wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        $payment=SalePayment::find($id);

        if ( $payment->delete()) {
            return redirect()->back()->with('success', 'Successfully Delete');
        } else {
            return redirect()->back()->with('error', 'Some Thing Went Wrong');
        }
    }
}

@extends('admin.includes.master')
@section('style-area')
@endsection
@section('content-area')
    <!-- users form -->
    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>{{isset($payment)?'Update Payment Details':'Add Payment Details'}}</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{isset($payment)?route('admin.payments.update',$payment->id):route('admin.payments.store')}}" method="post" enctype="multipart/form-data">
                   
                    @isset($payment)
                    @method('PATCH')
                    @endisset
                    @csrf
                    <h5>Buyer Detail</h5>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" name="fname" placeholder="Enter Name"
                                value="{{$payment->name??''}}">
                        </div>
                        <div class="col-6">
                            <label for="mobile">Mobile Number</label>
                            <input type="number" class="form-control" name="number" placeholder="Mobile Number"
                                value="{{$payment->number??''}}">
                        </div>
                        <div class="col-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{$payment->email??''}}">
                        </div>
                    </div>
                    <hr>
                    <h5>Property Detail</h5>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-6">
                            <p class="">For</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="for_sale"  {{isset($payment->for_sale)?($payment->for_sale=='rent_lease'?'checked':''):''}} id="maleGender"
                                    value="rent_lease" />
                                <label class="form-check-label" for="maleGender" value="rent_lease">Rent/Lease</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="for_sale" {{isset($payment->for_sale)?($payment->for_sale=='pg_hostel'?'checked':''):''}} id="otherGender"
                                    value="pg_hostel" />
                                <label class="form-check-label" for="otherGender" value="pg_hostel"  >PG/Hostel</label>
                            </div>
                            
                        </div>

                        <div class="field-wrapper input mb-2 col-6">
                            <label for="property">Property Type</label>
                            <select class="form-control form-small" name="property_type">
                                
                                <option selected hidden>--Select Property Type--</option>
                               <option value="comercial" {{isset($payment->property_type)?($payment->property_type=='comercial'?'selected':''):''}}>Comercial</option>
                               <option value="residential" {{isset($payment->property_type)?($payment->property_type=='residential'?'selected':''):''}}>Residential</option>
                               <option value="appartment" {{isset($payment->property_type)?($payment->property_type=='appartment'?'selected':''):''}}>Appartment</option>
                            </select>
                        </div>
                        
                        {{-- <div class="field-wrapper input mb-2 col-6">
                            <label for="property">Property Type</label>
                            <select class="form-control form-small" name="property_type">
                                @isset($payment->property_type)
                                <option value="{{$payment->property_type??''}}" selected >{{$payment->property_type??''}}</option>
                                @endisset
                                <option selected hidden>--Select Property Type--</option>
                               <option value="comercial">Comercial</option>
                               <option value="residential">Residential</option>
                               <option value="appartment">Appartment</option>
                            </select>
                        </div> --}}
                    </div>
                    
                    <h5>
                        Property Location
                    </h5>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="">Property Location</label>
                            <input type="text" class="form-control" name="property_location" value="{{$payment->property_location??''}}" placeholder="Enter city"
                                value="">
                        </div>
                        <div class="col-6">
                            <label for="">Name Project/Socity</label>
                            <input type="text" class="form-control" name="new_project_socity" value="{{$payment->new_project_socity??''}}" placeholder="Name Project/Socity" value="">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="property_address" value="{{$payment->property_address??''}}" placeholder="Enter Full Address"
                                value="">
                        </div>
                    </div>
                    <hr>
                    <h5>Area</h5>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="carpet_area">Carpet Area</label>
                            <input type="text" class="form-control" name="carpet_area" value="{{$payment->carpet_area??''}}" placeholder="First name"
                                value="">
                        </div>
                        <div class="col-6">
                            <label for="super_area">Super Area</label>
                            <input type="text" class="form-control" name="super_area" value="{{$payment->super_area??''}}" placeholder="super area must be smaller than carpet area"
                                value="">
                        </div>
                    </div>
                    <hr>
                    
                       
                    <div class="row mb-4">
                        <h5 class="col-12">Rent/Lease Details</h5>
                        <hr>
                            <div class="col-6">
                                <label for="Monthly">Rent From</label>
                                <input type="date" class="form-control" name="from_month" value="{{$payment->from_month??''}}" placeholder="Enter Total Rent"
                                    value="">
                            </div>
                            <div class="col-6">
                                <label for="security">To</label>
                                <input type="date" class="form-control" name="to_month" value="{{$payment->to_month??''}}" placeholder="Security Amount"
                                    value="">
                            </div>
                        
                            <div class="col-6">
                                <label for="Monthly">Manegment Charge</label>
                                <input type="text" class="form-control" name="managment_charge" value="{{$payment->managment_charge??''}}" placeholder="Maintenance charge"
                                    value="">
                            </div>
                            <div class="col-6">
                                <label for="security">Security Amount</label>
                                <input type="text" class="form-control" name="security_amnt" value="{{$payment->security_amnt??''}}" placeholder="Security Ammount"
                                    value="">
                            </div>
                        
                            <div class="col-6">
                                <label for="Monthly">Monthly Rent</label>
                                <input type="number" class="form-control" name="full_rent" value="{{$payment->full_rent??''}}" placeholder="Monthly Rent"
                                    value="">
                            </div>
                        </div>
                    <hr>
                    <h5>
                        Property Image And Description
                    </h5>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="Monthly">Upload Property Picture</label>
                            <input type="file" class="form-control" name="picture" placeholder="Maintenance charge"
                                value="" multiple>
                        </div>
                        <div class="col-6">
                            <label for="security">Description</label>
                            <textarea class="form-control" name="desc" rows="1" cols="10">{{$payment->desc??'Property Description'}}</textarea>
                        </div>
                    </div>
                  
            </div>
            &nbsp;&nbsp;&nbsp; <button type="submit"
                class="btn btn-primary mb-2">{{isset($payment)?'Update Payment':'Add Payment'}}</button>
            </form>
        </div>
    </div>
    </div>

    <!-- user tables -->
@endsection
@section('script-area')
    <script>
        var formSmall = $(".form-small").select2({
            tags: true
        });
        formSmall.data('select2').$container.addClass('form-control-sm')
    </script>
@endsection

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
                        <h4>{{isset($editProperty)?'Update Property':'Add Property'}}</h4>
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
                
                <form action="{{isset($editProperty)?route('admin.updateAgentDetail',$editProperty->id):route('admin.storeAgentDetail')}}" method="post" enctype="multipart/form-data">
                   
                    @isset($editProperty)
                    @method('POST')
                    @endisset
                    @csrf
                    <h5>Personal Detail</h5>
                    <hr>
                    <div class="row mb-4">
                        <div class="field-wrapper input mb-2 col-6">
                            <label for="">I Am</label>
                            <select name="role" class="form-control">
                                @isset($editProperty->role)
                                <option value="{{$editProperty->role??''}}" selected >{{$editProperty->role??''}}</option>
                                @endisset
                                <option value="">--Select Role--</option>
                            {{-- @foreach($editProperty as $edit)
                                <option value="{{$edit->id}}">{{$edit->role}}</option>
                            @endforeach --}}
                            <option value="Hr">HR</option>
                            <option value="Customer">Customer</option>
                            <option value="Agent">Agent</option>
                            <option value="Owner">Owner</option>

                            </select>
                        </div>
                        <div class="col-6">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" name="fname" placeholder="Enter Name"
                                value="{{$editProperty->name??''}}">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="mobile">Mobile Number</label>
                            <input type="number" class="form-control" name="number" placeholder="Mobile Number"
                                value="{{$editProperty->number??''}}">
                        </div>
                        <div class="col-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{$editProperty->email??''}}">
                        </div>
                    </div>
                    <hr>
                    <h5>Property Detail</h5>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-6">
                            <p class="">For</p>
                            {{-- {{$editProperty->for_sale}} --}}
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="for_sale" {{isset($editProperty->for_sale)?($editProperty->for_sale=='sale'?'checked':''):''}} id="femaleGender"
                                    value="sale"  />
                                <label class="form-check-label" for="femaleGender" value="sale"  >Sale</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="for_sale"  {{isset($editProperty->for_sale)?($editProperty->for_sale=='rent_lease'?'checked':''):''}} id="maleGender"
                                    value="rent_lease" />
                                <label class="form-check-label" for="maleGender" value="rent_lease">Rent/Lease</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="for_sale" {{isset($editProperty->for_sale)?($editProperty->for_sale=='option3'?'checked':''):''}} id="otherGender"
                                    value="pg_hostel" />
                                <label class="form-check-label" for="otherGender" value="pg_hostel"  >PG/Hostel</label>
                            </div>
                            
                        </div>
                        
                        <div class="field-wrapper input mb-2 col-6">
                            <label for="property">Property Type</label>
                            <select class="form-control form-small" name="property_type">
                                @isset($editProperty->property_type)
                                <option value="{{$editProperty->property_type??''}}" selected >{{$editProperty->property_type??''}}</option>
                                @endisset
                                <option selected hidden>--Select Property Type--</option>
                               <option value="comercial">Comercial</option>
                               <option value="residential">Residential</option>
                               <option value="appartment">Appartment</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <p class="">You are posting as</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="posting_as" id="femaleGender"
                                    value="full_house"  />
                                <label class="form-check-label" for="femaleGender" >Full House</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="posting_as" id="maleGender"
                                    value="on_shairing_basis" />
                                <label class="form-check-label" for="maleGender">On shairing basis</label>
                            </div>
                        </div>
                        {{-- <div class="col-6">
                            <div class="col-6">
                            <p class="">For</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                    value="sale" checked />
                                <label class="form-check-label" for="femaleGender">Sale</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                    value="rent_lease" />
                                <label class="form-check-label" for="maleGender">Rent/Lease</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                    value="pg_hostel" />
                                <label class="form-check-label" for="otherGender">PG/Hostel</label>
                            </div>
                        </div>
                        </div> --}}
                    </div>
                    <hr>
                    <h5>
                        Property Location
                    </h5>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="">Property Location</label>
                            <input type="text" class="form-control" name="property_location" value="{{$editProperty->property_location??''}}" placeholder="Enter city"
                                value="">
                        </div>
                        <div class="col-6">
                            <label for="">Name Project/Socity</label>
                            <input type="text" class="form-control" name="new_project_socity" value="{{$editProperty->new_project_socity??''}}" placeholder="Name Project/Socity" value="">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="property_address" value="{{$editProperty->property_address??''}}" placeholder="Enter Full Address"
                                value="">
                        </div>
                    </div>
                    <hr>
                    <h5>Area</h5>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="carpet_area">Carpet Area</label>
                            <input type="text" class="form-control" name="carpet_area" value="{{$editProperty->carpet_area??''}}" placeholder="First name"
                                value="">
                        </div>
                        <div class="col-6">
                            <label for="super_area">Super Area</label>
                            <input type="text" class="form-control" name="super_area" value="{{$editProperty->super_area??''}}" placeholder="super area must be smaller than carpet area"
                                value="">
                        </div>
                    </div>
                    <hr>
                    <h5>Transaction Type Property Availability</h5>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-6">
                            <p class="">Available For</p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="date" id="femaleGender"
                                    value="select_date"/>
                                <label class="form-check-label" for="femaleGender" >Select Date</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="date" id="maleGender"
                                    value="immediately" />
                                <label class="form-check-label" for="maleGender" >Immediately</label>
                            </div>
                        </div>
                        {{-- <div class="field-wrapper input mb-2 col-6">
                            <label for="">I Am</label>
                            <select class="form-control form-small" name="">
                                <option selected hidden>--Select--</option>
                                <option value="agent">....</option>
                                <option value="hr">....</option>
                                <option value="owener">....</option>
                            </select>
                        </div> --}}
                    </div>
                    <hr>
                    <h5>Rent/Lease Details</h5>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="Monthly">Monthly Rent</label>
                            <input type="date" class="form-control" name="monthly_rent" value="{{$editProperty->monthly_rent??''}}" placeholder="Enter Total Rent"
                                value="">
                        </div>
                        <div class="col-6">
                            <label for="security">Security Amount (optional)</label>
                            <input type="text" class="form-control" name="security_amnt" value="{{$editProperty->security_amnt??''}}" placeholder="Security Amount"
                                value="">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="Monthly">Manegment Charge</label>
                            <input type="text" class="form-control" name="managment_charge" value="{{$editProperty->managment_charge??''}}" placeholder="Maintenance charge"
                                value="">
                        </div>
                        <div class="col-6">
                            <label for="security">Per</label>
                            <input type="text" class="form-control" name="monthly_status" value="{{$editProperty->monthly_status??''}}" placeholder="Monthly Status"
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
                            <input type="file" class="form-control" name="picture[]" placeholder="Maintenance charge"
                                value="" multiple>
                        </div>
                        <div class="col-6">
                            <label for="security">Description</label>
                            <textarea class="form-control" name="desc" rows="1" cols="10">{{$editProperty->desc??'Property Description'}}</textarea>
                        </div>
                    </div>
                    {{--   <div class="row mb-4">
                    <div class="col-6 {{isset($editUser)? 'd-none':''}}">
                        <input type="password" class="form-control" name="password" placeholder="Password" value="">
                    </div>
                    <div class="col-6">
                        <select class="form-control form-small" name="roles[]">
                            <option selected hidden>--Select Role--</option>
                            @foreach ($roles as $role)
                            <option value="{{$role->id}}"
                                {{isset($editUser)?($editUser->roles[0]->id == $role->id ?'selected':''):''}}>
                                {{$role->name ?? ''}}</option>
                            @endforeach
                        </select>
                    </div> --}}
            </div>
            &nbsp;&nbsp;&nbsp; <button type="submit"
                class="btn btn-primary mb-2">{{isset($editProperty)?'Update Property':'Add Property'}}</button>
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

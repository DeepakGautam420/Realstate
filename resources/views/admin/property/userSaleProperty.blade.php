@extends('admin.includes.master')
@section('style-area')
@endsection
@section('content-area')
    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>{{ isset($propertyEdit) ? 'Update Property' : 'Add Property' }}</h4>
                        {{-- <h4>Add Property</h4> --}}
                        {{-- {{$propertyEdit}} --}}
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

                <form action="{{ isset($propertyEdit) ? route('admin.updateUserSellProperty', $propertyEdit->id) : route('admin.storeSellProperty') }}" method="post" enctype="multipart/form-data">
                    {{-- <form action="{{route('storeSellProperty')}}" method="post" enctype="multipart/form-data"> --}}
                    @isset($propertyEdit)
                        @method('POST')
                    @endisset
                    @csrf
                    <h5>Personal Detail</h5>
                    <hr>
                    <div class="row mb-4"> 
                        <div class="col-12">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" name="oname" id="name" placeholder="Enter Name"
                                value="{{$propertyEdit->name??''}}">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="mobile">Mobile Number</label>
                            <input type="number" class="form-control" name="number" id="mobile" placeholder="Mobile Number"
                            value="{{$propertyEdit->mobile??''}}">
                        </div>
                        <div class="col-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                            value="{{$propertyEdit->email??''}}">
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address"
                            value="{{$propertyEdit->address??''}}" placeholder="Enter Address" value="" id="address">
                        </div>
                        <div class="col-6">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city"
                            value="{{$propertyEdit->city??''}}" placeholder="Enter City" id="city"
                                >
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="locality">Locality</label>
                            <input type="text" class="form-control" name="locality"
                            value="{{$propertyEdit->locality??''}}" placeholder="Enter Locality" id="locality"
                               >
                        </div>
                        <div class="col-6">
                            <label for="state">State</label>
                            <input type="text" class="form-control" name="state"
                            value="{{$propertyEdit->state??''}}" placeholder="Enter State" >
                        </div>
                    </div>
                    <div class="row mb-4">
                        
                        <div class="col-6">
                            <label for="area">Area</label>
                            <input type="text" class="form-control" id="area" name="area"
                                placeholder="Enter Your Area" value="{{$propertyEdit->area??''}}">
                        </div>
                        <div class="col-6">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price"
                               placeholder="Enter Legal Price"
                               value="{{$propertyEdit->price??''}}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="picture">Upload Property Picture</label>
                            <input type="file" class="form-control" name="picture[]" id="picture" placeholder="Maintenance charge"
                                value="" multiple>
                        </div>
                        <div class="col-6">
                            <label for="desc">Description</label>
                            <textarea class="form-control" name="desc" id="desc" rows="1" cols="10">{{$propertyEdit->description??''}}</textarea>
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
                class="btn btn-primary mb-2">{{ isset($propertyEdit) ? 'Update Property' : 'Add Property' }}</button>
                {{-- class="btn btn-primary mb-2">Add Property</button> --}}
            </form>
        </div>
    </div>
    </div>
@endsection
@section('script-area')
@endsection

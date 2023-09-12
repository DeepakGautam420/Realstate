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
                        {{-- <h4>{{isset($editProperty)?'Update Payment':'Add Payment Details'}}</h4> --}}
                        <h4>Agents</h4>
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
                
                {{-- <form action="{{isset($editProperty)?route('admin.updateAgentDetail',$editProperty->id):route('admin.storeAgentDetail')}}" method="post" enctype="multipart/form-data"> --}}
                <form action="{{route('admin.storeAgents')}}" method="post" enctype="multipart/form-data">
                   
                    {{-- @isset($editProperty)
                    @method('POST')
                    @endisset --}}
                    @csrf
                    {{-- <div class="row mb-4">
                        
                        <div class="col-6">
                            <label for="name">Buyer Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                value="{{$editProperty->name??''}}">
                        </div>
                        <div class="col-6">
                            <label for="mobile">Mobile Number</label>
                            <input type="number" class="form-control" name="number" placeholder="Mobile Number"
                                value="{{$editProperty->number??''}}">
                        </div>
                    </div> --}}

                    <div class="row mb-4">
                        
                        <div class="col-6">
                            <label for="email">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{$editProperty->name??''}}">
                        </div>
                        <div class="col-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{$editProperty->email??''}}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="">Mobile</label>
                            <input type="number" class="form-control" name="mobile" value="{{$editProperty->mobile??''}}" placeholder="Mobile"
                                value="">
                        </div>
                        <div class="col-6">
                            <label for="">Facebook Link</label>
                            <input type="link" class="form-control" name="fb_link" value="{{$editProperty->fb_link??''}}" placeholder="Facebook Link">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="carpet_area">Twiter Link</label>
                            <input type="link" class="form-control" name="twiter_link" value="{{$editProperty->twiter_link??''}}" placeholder="Twiter Link"
                                value="">
                        </div>
                        <div class="col-6">
                            <label for="super_area">Instagram Link</label>
                            <input type="link" class="form-control" name="insta_link" value="{{$editProperty->insta_link??''}}" placeholder="Instagram Link"
                                value="">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="Monthly">Linkdine Link</label>
                            <input type="link" class="form-control" name="linkdine_link" value="{{$editProperty->linkdine_link??''}}" placeholder="Linkdine Link"
                               >
                        </div>
                    </div>
                    <hr>
                    <h5>
                        Agent Image And Description
                    </h5>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="Monthly">Upload Agent Picture</label>
                            <input type="file" class="form-control" name="file" placeholder="Maintenance charge"
                                >
                        </div>
                        <div class="col-6">
                            <label for="security">Description</label>
                            <textarea class="form-control" name="desc" rows="1" cols="10">{{$editProperty->desc??'Property Description'}}</textarea>
                        </div>
                    </div>
                    
            </div>
            &nbsp;&nbsp;&nbsp; 
            {{-- <button type="submit"
                class="btn btn-primary mb-2">{{isset($editProperty)?'Update Payment':'Add Payment'}}</button> --}}
                <button type="submit" class="btn btn-primary mb-2">Save</button>
            </form>
        </div>
    </div>
    </div>
    <!-- user tables -->
@endsection
@section('script-area')
   
@endsection

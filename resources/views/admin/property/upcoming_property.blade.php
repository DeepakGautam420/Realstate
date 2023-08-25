@extends('admin.includes.master')
@section('style-area')
@endsection
@section('content-area')
    <div class="container p-5">
        <div class="row">
            <form action="{{ isset($single)?route('admin.update_upcoming_sale',$single->id):route('admin.save_upcoming_sale') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                @isset($single)
                    @method('post')
                @endisset
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Owner Name</label>
                    <input type="text" class="form-control" value ="{{isset($single->name)?$single->name:''}}" id="inputEmail4" name="oname">
                </div>
                <div class="col-md-6">
                    <label for="number" class="form-label">Mobile</label>
                    <input type="number" class="form-control" name="number" value ="{{isset($single->mobile)?$single->mobile:''}}" id="number">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value ="{{isset($single->email)?$single->email:''}}" class="form-control" id="email">
                </div>
                <div class="col-md-6">
                    <label for="propertyImage" class="form-label">Property Image</label>
                    <input type="file" class="form-control" name="picture" id="propertyImage">
                    @isset($single->image)
                        <img src="{{asset('upload/upcoming/'.$single->image)}}" height='50x' width='50x'>
                    @endisset
                </div>
                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" value ="{{isset($single->address)?$single->address:''}}" id="address">
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" class="form-control" value ="{{isset($single->city)?$single->city:''}}" id="city">
                </div>
                <div class="col-md-6">
                    <label for="locality" class="form-label">Locality</label>
                    <input type="text" class="form-control" name="locality" value ="{{isset($single->locality)?$single->locality:''}}" id="locality">
                </div>
                <div class="col-md-6">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" name="state" value ="{{isset($single->state)?$single->state:''}}" id="state">
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" value ="{{isset($single->price)?$single->price:''}}" id="price">
                </div>
                <div class="col-md-6">
                    <label for="area" class="form-label">Area</label>
                    <input type="text" class="form-control" name="area" value ="{{isset($single->area)?$single->area:''}}" id="area">
                </div>
                <div class="col-md-6">
                    <label for="desc" class="form-label">Property Description</label>
                    <textarea class="form-control" name="desc" id="desc" rows="3">
                        {{isset($single->description)?$single->description:''}}
                    </textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary"> {{isset($single)?'Update Upcoming Property':'Save Upcoming Property'}}</button>
                </div>
            </form>
        </div>
        <!-- Listing tables -->
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Property Tables</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-4">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Picture</th>
                                        <th>Role</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Locality</th>
                                        <th>Price</th>
                                        <th>Area</th>
                                        <th>Description</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($property)
                                    @foreach ($property as $user)
                                    <tr>
                                        <th>{{$loop-> index+1}}</th>
                                        <td> 
                                            <img src="{{asset('upload/upcoming/'.$user->image??'')}}" height='50x' width='50x'>
                                         </td>
                                        <td>{{$user->role ?? ''}}</td>
                                        <td>{{$user->name ?? ''}}</td>
                                        <td>{{$user->email ?? ''}}</td>
                                        <td> {{$user->mobile ?? ''}}</td>
                                        <td> {{$user->address ?? ''}}</td>
                                        <td> {{$user->city ?? ''}}</td>
                                        <td> {{$user->locality ?? ''}}</td>
                                        <td> {{$user->price ?? ''}}</td>
                                        <td> {{$user->area ?? ''}}</td>
                                        <td> {{$user->description ?? ''}}</td>
                                        <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-horizontal">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="19" cy="12" r="1"></circle>
                                                        <circle cx="5" cy="12" r="1"></circle>
                                                    </svg>
                                                </a>
                                                @php
                                                $bid=Crypt::encrypt($user->id);
                                                @endphp
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="{{route('admin.edit_upcoming_sale',$bid)}}">Edit</a>
                                                    <a class="dropdown-item" href="{{route('admin.delete_upcoming_sale',$bid)}}">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                        @endforeach
                                        @endisset
                                </tbody>
                            </table>
                            {{-- {!! $properties->links() !!} --}}
                        
                        </div><br>
                        {{-- {!! $properties->links('pagination::bootstrap-5') !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

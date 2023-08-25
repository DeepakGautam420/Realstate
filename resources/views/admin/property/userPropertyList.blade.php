@extends('admin.includes.master')
@section('style-area')
@endsection
@section('content-area')
    <!-- user tables -->
    <div class="col-lg-12 col-md-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Users Property Tables</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <thead>
                            <tr>
                                <th>Sr.</th>
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
                            @foreach ($property as $prpty)
                            <tr>
                                <th>{{$loop-> index+1}}</th>
                                <td>{{$prpty->name ?? ''}}</td>
                                <td>{{$prpty->email ?? ''}}</td>
                                <td> {{$prpty->mobile ?? ''}}</td>
                                <td> {{$prpty->address ?? ''}}</td>
                                <td> {{$prpty->city ?? ''}}</td>
                                <td> {{$prpty->locality ?? ''}}</td>
                                <td> {{$prpty->price ?? ''}}</td>
                                <td> {{$prpty->area ?? ''}}</td>
                                <td> {{$prpty->description ?? ''}}</td>
                                {{-- <td> 
                                    @if(isset($prpty->picture))
                                    @php
                                        $imgs = json_decode($prpty->picture);
                                    @endphp
                                    @endif
                                        <a href='{{route("admin.proertyimg",$prpty->picture)}}'><img src="{{asset('upload/property/'.$imgs[0]??'')}}" height='50x' width='50x'> </a>;
                                </td> --}}
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
                                        $bid=Crypt::encrypt($prpty->id);
                                        @endphp
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="{{route('admin.editUserSellProperty',$bid)}}">Edit</a>
                                            <a class="dropdown-item" href="{{route('admin.deleteSaleProperty',$bid)}}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                    </table>
                    {{-- {!! $properties->links() !!} --}}
                   
                </div><br>
                {{-- {!! $properties->links('pagination::bootstrap-5') !!} --}}
            </div>
        </div>
    </div>
@endsection
@section('script-area')
   
@endsection

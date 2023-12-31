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
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>For Sale</th>
                                <th>Property Type</th>
                                <th>Posting As</th>
                                <th>Property Location</th>
                                <th>New Project Socity</th>
                                <th>Property Address</th>
                                <th>Area</th>
                                <th>Bedroom</th>
                                <th>Bathroom</th>
                                <th>Grages</th>
                                <th>To Month</th>
                                <th>From Month</th>
                                <th>Full Rent</th>
                                <th>Security Ammount</th>
                                <th>Managment Charge</th>
                                <th>Picture</th>
                                <th>Description</th>
                                <th>Property Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($properties as $user)
                            <tr>
                                <th>{{$loop-> index+1}}</th>
                                <td>{{$user->role ?? ''}}</td>
                                <td>{{$user->name ?? ''}}</td>
                                <td>{{$user->email ?? ''}}</td>
                                <td> {{$user->number ?? ''}}</td>
                                <td> {{$user->for_sale ?? ''}}</td>
                                <td> {{$user->property_type ?? ''}}</td>
                                <td> {{$user->posting_as ?? ''}}</td>
                                <td> {{$user->property_location ?? ''}}</td>   
                                <td> {{$user->new_project_socity ?? ''}}</td>
                                <td> {{$user->property_address ?? ''}}</td>
                                <td> {{$user->area ?? ''}}</td>
                                <td> {{$user->bedroom ?? ''}}</td>
                                <td> {{$user->bathroom ?? ''}}</td>
                                <td> {{$user->grage ?? ''}}</td>
                                <td> {{$user->to_month ?? ''}}</td>
                                <td> {{$user->from_month ?? ''}}</td>
                                <td> {{$user->full_rent ?? ''}}</td>
                                <td> {{$user->security_amnt ?? ''}}</td>
                                <td> {{$user->managment_charge ?? ''}}</td>
                                <td> 
                                    @if(isset($user->picture))
                                    @php
                                        $imgs = json_decode($user->picture);
                                    @endphp
                                    @endif
                                        <a href='{{route("admin.proertyimg",$user->picture)}}'><img src="{{asset('upload/product/'.$imgs[0]??'')}}" height='50x' width='50x'> </a>;
                                </td>
                                <td> {{$user->description ?? ''}}</td>
                                <td> {{$user->property_status ?? ''}}</td>
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
                                            <a class="dropdown-item" href="{{route('admin.agentEdit',$bid)}}">Edit</a>
                                            <a class="dropdown-item" href="{{route('admin.deleteAgent',$bid)}}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                    </table>
                    {{-- {!! $properties->links() !!} --}}
                   
                </div><br>
                {!! $properties->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection
@section('script-area')
   
@endsection

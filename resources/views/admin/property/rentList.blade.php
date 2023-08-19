@extends('admin.includes.master')
@section('style-area')
@endsection
@section('content-area')
    <!-- rented tables -->
    <div class="col-lg-12 col-md-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Rented Tables</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
              <h5>Total Rent List :  {{isset($rent)?count($rent):''}}</h5>
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Property Type</th>
                                <th>For Sale</th>
                                <th>Posting</th>
                                <th>Property Location</th>
                                <th>New Project</th>
                                <th>Property Address</th>
                                <th>Carpet Area</th>
                                <th>Super Area</th>
                                <th>Date</th>
                                <th>Monthly Rent</th>
                                <th>Security Amount</th>
                                <th>Managment Charge</th>
                                <th>Monthly Status</th>
                                <th>Picture</th>
                                <th>Description</th>
                                {{-- <th class="text-center">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rent as $rented)
                            <tr>
                                <th>{{$loop-> index+1}}</th>
                                <td>{{$rented->role ?? ''}}</td>
                                <td>{{$rented->name ?? ''}}</td>
                                <td>{{$rented->email ?? ''}}</td>
                                <td> {{$rented->number ?? ''}}</td>
                                <td> {{$rented->for_sale ?? ''}}</td>
                                <td> {{$rented->property_type ?? ''}}</td>
                                <td> {{$rented->posting_as ?? ''}}</td>
                                <td> {{$rented->property_location ?? ''}}</td>
                                <td> {{$rented->new_project_socity ?? ''}}</td>
                                <td> {{$rented->property_address ?? ''}}</td>
                                <td> {{$rented->carpet_area ?? ''}}</td>
                                <td> {{$rented->super_area ?? ''}}</td>
                                <td> {{$rented->date ?? ''}}</td>
                                <td> {{$rented->monthly_rent ?? ''}}</td>
                                <td> {{$rented->security_amnt ?? ''}}</td>
                                <td> {{$rented->managment_charge ?? ''}}</td>
                                <td> {{$rented->monthly_status ?? ''}}</td>
                                <td> {{$rented->picture ?? ''}}</td>
                                <td> {{$rented->description ?? ''}}</td>
                                {{-- <td class="text-center">
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
                                        $bid=Crypt::encrypt($rented->id);
                                        @endphp
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="{{route('admin.agentEdit',$bid)}}">Edit</a>
                                            <a class="dropdown-item" href="{{route('admin.deleteAgent',$bid)}}">Delete</a>
                                        </div>
                                    </div>
                                </td> --}}
                            </tr>
                                @endforeach
                        </tbody>
                    </table>
                    {{-- {!! $properties->links() !!} --}}
                   
                </div><br>
                {!! $rent->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection
@section('script-area')
   
@endsection

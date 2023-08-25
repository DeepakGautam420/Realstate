@extends('admin.includes.master')
@section('style-area')
@endsection
@section('content-area')
    <!-- Sale Property tables -->
    <div class="col-lg-12 col-md-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Payment Tables</h4>
                    </div>
                </div>
            </div>
            {{-- {{$payment}} --}}
            <div class="widget-content widget-content-area">
                <h5>Total Rent List :  {{isset($sale)?count($sale):''}}</h5>
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>For Sale</th>
                                <th>Property Type</th>
                                <th>Property Location</th>
                                <th>New Project</th>
                                <th>Property Address</th>
                                <th>Carpet Area</th>
                                <th>Super Area</th>
                                <th>From Month</th>
                                <th>To Month</th>
                                <th>Security Amount</th>
                                <th>Managment Charge</th>
                                <th>Picture</th>
                                <th>Description</th>
                                <th>Full Rent</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payment as $pmnt)
                            <tr>
                                <th>{{$loop-> index+1}}</th>
                                <td>{{$pmnt->name ?? ''}}</td>
                                <td>{{$pmnt->email ?? ''}}</td>
                                <td> {{$pmnt->number ?? ''}}</td>
                                <td> {{$pmnt->for_sale ?? ''}}</td>
                                <td> {{$pmnt->property_type ?? ''}}</td>
                                <td> {{$pmnt->property_location ?? ''}}</td>
                                <td> {{$pmnt->new_project_socity ?? ''}}</td>
                                <td> {{$pmnt->property_address ?? ''}}</td>
                                <td> {{$pmnt->carpet_area ?? ''}}</td>
                                <td> {{$pmnt->super_area ?? ''}}</td>
                                <td> {{$pmnt->from_month ?? ''}}</td>
                                <td> {{$pmnt->to_month ?? ''}}</td>
                                <td> {{$pmnt->security_amnt ?? ''}}</td>
                                <td> {{$pmnt->managment_charge ?? ''}}</td>
                                <td><img class="rounded" src="{{ asset($pmnt->picture) }}"
                                        alt="" width="50px" height="50px"></td>
                                <td> {{$pmnt->description ?? ''}}</td>
                                <td> {{$pmnt->full_rent ?? ''}}</td>
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
                                        $bid=Crypt::encrypt($pmnt->id);
                                        @endphp
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="{{route('admin.payments.edit',$bid)}}">Edit</a>
                                            <form action="{{route('admin.payments.destroy',$bid)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item btn btn-danger mt-1"><i class="bx bx-trash me-1"></i>  Delete</button>
                                                </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                    </table>
                    {{-- {!! $properties->links() !!} --}}
                   
                </div><br>
                {{-- {!! $sale->links('pagination::bootstrap-5') !!} --}}
            </div>
        </div>
    </div>
@endsection
@section('script-area')
   
@endsection

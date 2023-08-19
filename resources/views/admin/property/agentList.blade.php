@extends('admin.includes.master')
@section('style-area')
@endsection
@section('content-area')
    <!-- Agent tables -->
    <div class="col-lg-12 col-md-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">

                        <h4>Agent Tables</h4>
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
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($agent as $agnt)
                                <tr>
                                    <th>{{ $loop->index + 1 }}</th>
                                    <td>{{ $agnt->role ?? '' }}</td>
                                    <td>{{ $agnt->name ?? '' }}</td>
                                    <td>{{ $agnt->email ?? '' }}</td>
                                    <td class="text-center">
                                        <div class="dropdown custom-dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-horizontal">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                            </a>
                                            @php
                                                $bid = Crypt::encrypt($agnt->id);
                                            @endphp
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.editAgent', $bid) }}">Edit</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.agentDelete', $bid) }}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {!! ->links() !!} --}}

                </div><br>
                {!! $agent->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
    {{-- Owner Table --}}

   
@endsection
@section('script-area')
@endsection

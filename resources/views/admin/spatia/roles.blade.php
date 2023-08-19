@extends('admin.includes.master')
@section('style-area')

@endsection
@section('content-area')
<!-- roles form -->
<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Roles Form </h4>
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
            <form action="{{isset($editRoles)? route('admin.roleUpdate',$editRoles->id):route('admin.roleCreate')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-4">
                    <div class="col-6">
                        <input type="text" class="form-control" name="name" placeholder="First name" value="{{$editRoles->name ??''}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">{{isset($editRoles)? 'update':'submit'}}</button>
            </form>
        </div>
    </div>
</div>

<!-- role tables -->
<div class="col-lg-12 col-md-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Role Tables</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="table-responsive">
                <table class="table table-bordered mb-4">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Created At</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->name ?? ''}}</td>
                            <td>{{$role->created_at ?? ''}}</td>
                            <td class="text-center">
                                <div class="dropdown custom-dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    @php
                                    $bid=Crypt::encrypt($role->id);
                                    @endphp
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                        <a class="dropdown-item" href="{{route('admin.roleEdit',$bid)}}">Edit</a>
                                        <a class="dropdown-item" href="{{route('admin.roleDelete',$bid)}}">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script-area')

@endsection
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
                    <h4>User Form </h4>
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
            <form action="{{isset($editUser)?route('admin.userUpdate',$editUser->id):route('admin.userCreate')}}"
                method="post" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="row mb-4">
                    <div class="col-6">
                        <input type="text" class="form-control" name="name"  placeholder="First name"
                            value="{{$editUser->name ?? ''}}">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" name="email" placeholder="Email"
                            value="{{$editUser->email ?? ''}}">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6 {{isset($editUser)? 'd-none':''}}">
                        <input type="password" class="form-control" name="password"  placeholder="Password" value="">
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
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-6">
                        <input type="number" class="form-control" name="mobile" placeholder="Mobile"
                            value="{{$editUser->mobile ?? ''}}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">{{isset($editUser)? 'update':'submit'}}</button>
            </form>
        </div>
    </div>
</div>

<!-- user tables -->
<div class="col-lg-12 col-md-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>User Tables</h4>
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
                            <th>Roles</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th>{{$loop-> index+1}}</th>
                            <td>{{$user->name ?? ''}}</td>
                            <td>{{$user->email ?? ''}}</td>
                            <td> {{$user->roles[0]->name ?? ''}}</td>
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
                                        <a class="dropdown-item" href="{{route('admin.userEdit',$bid)}}">Edit</a>
                                        <a class="dropdown-item" href="{{route('admin.userDelete',$bid)}}">Delete</a>
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
<script>
var formSmall = $(".form-small").select2({
    tags: true
});
formSmall.data('select2').$container.addClass('form-control-sm')
</script>
@endsection
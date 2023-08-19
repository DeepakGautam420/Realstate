@extends('admin.includes.master')
@section('style-area')

@endsection
@section('content-area')
<!-- permission form -->
<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Permission Form </h4>
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
            <form action="{{route('admin.permissionsCreate')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-4">
                    <div class="col-6">
                        <input type="text" class="form-control" name="name" placeholder="Permission name" value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Permission tables -->
<div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
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
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissionsName as $name )
                            <tr>
                                <td>{{$name->name ?? ''}}</td>
                                <td>{{$name->created_at ?? ''}}</td>
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
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
                    <h4>Permissions Form </h4>
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
            <div class="row mb-4">
                <div class="col-6">
                    <select class="form-control form-small roles" name="roles">
                        <option disabled>--Select Role--</option>
                        @foreach ($roles as $role)
                        <option value="{{$role->id}}">{{$role->name ?? ''}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="button" class="btn btn-primary rolesbtn">Fatch</button>
        </div>
    </div>
</div>

<!-- user tables -->
<div class="col-lg-12 col-md-12 layout-spacing permisions">
</div>

@endsection
@section('script-area')
<script>
$(document).ready(function() {
    $(document).on('click', '.rolesbtn', function() {
        var form_data = $('.roles').val();
        var newurl = "{{route('admin.rolePermissionsFatch')}}";
        $.ajax({
            method: 'get',
            url: newurl,
            data: {
                'roles': form_data,
            },
            success: function(p) {
                $('.permisions').html(p);
            },
            error: function(a) {
                if (a.status == 422) {
                    var data = $.parseJSON(a.responseText);
                    $.each(data.errors, function(key, val) {
                        toastr.warning(val);
                    });
                }
            }
        });
    });
});
</script>
@endsection
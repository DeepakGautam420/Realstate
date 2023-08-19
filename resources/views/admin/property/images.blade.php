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
                        <h4>Property Images</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="row">
                    @php
                    // var_dump($imgs);die;
                    @endphp
                    @isset($imgs)
                    @foreach (json_decode($imgs) as $item)
                    <div class="col-sm-4 mb-4"> 
                        <img src="{{asset('upload/product/'.$item??'')}}" height='300x' width='300x'>     
                    </div>    
                    @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script-area')
   
@endsection

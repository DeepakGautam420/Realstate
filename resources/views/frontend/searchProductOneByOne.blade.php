
{{--  <h1>@isset($selldata)
{{$selldata}}
@endisset
@isset($rentdata)
{{$rentdata}}
@endisset  --}}

@extends('frontend.includes.master')
@section('content')
<div class="container py-4 my-4 mx-auto d-flex flex-column">
    <div class="header">
        <div class="row r1">
            <div class="col-md-9 abc">
                <h1>{{$product->new_project_socity}}</h1>
            </div>
            {{--  <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
            <p class="text-right para">Based on 250 Review</p>  --}}
        </div>
    </div>
    <div class="container-body mt-4">
        <div class="row r3">
            <div class="col-md-5 p-0 klo">
                <ul>
                    <li class="d-flex list-group-item align-items-center"><h5>Property Type :</h5> <h6 class="ml-2">{{$product->property_type}}</h6></li>
                    <li class="d-flex list-group-item align-items-center"><h5>Property Location :</h5> <h6 class="ml-2">{{$product->property_location}}</h6></li>
                    <li class="d-flex list-group-item align-items-center" ><h5>Property Address :</h5><h6 class="ml-2">{{$product->property_address}}</h6></li>
                    <li class="d-flex list-group-item align-items-center"><h5>Area :</h5><h6 class="ml-2">{{$product->area}}</h6></li>
                    <li class="d-flex list-group-item align-items-center"><h5>Bedrooms :</h5><h6 class="ml-2"> {{$product->bedroom}}</h6></li>
                    <li class="d-flex list-group-item align-items-center"><h5>Bathroom :</h5> <h6 class="ml-2">{{$product->bathroom}}</h6></li>
                    <li class="d-flex list-group-item align-items-center"><h5>Grages :</h5> <h6 class="ml-2">{{$product->grage}}</h6></li>
                </ul>
            </div>
            @php
            $pctr=json_decode($product->picture);

            @endphp

            <div class="col-md-7"> <img src="{{asset('upload/product/'.$pctr[0]??'')}}" width="90%" height="95%"> </div>
        </div>
    </div>
    {{--  <div class="footer d-flex flex-column mt-5">
        <div class="row r4">
            <div class="col-md-2 myt des"><a href="#">Description</a></div>
            <div class="col-md-2 myt "><a href="#">Review</a></div>
            <div class="col-md-2 mio offset-md-4"><a href="#">ADD TO CART</a></div>
            <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="#">BUY NOW</a></button></div>
        </div>
    </div>  --}}
</div>
@endsection

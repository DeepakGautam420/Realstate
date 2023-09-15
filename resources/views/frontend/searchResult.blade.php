
{{--  <h1>@isset($selldata)
{{$selldata}}
@endisset
@isset($rentdata)
{{$rentdata}}
@endisset  --}}

@extends('frontend.includes.master')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<div class="container">
   <h3 class="pb-3 mb-4 font-italic border-bottom">
      Searched Result
   </h3>

   @isset($selldata)
   @foreach ($selldata as $sell)
   <div class="row">
      <div class="col-md-12">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-primary">{{$sell->name}}</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">{{$sell->area}}</a>
               </h6>
               <div class="mb-1 text-muted small">{{$sell->created_at}}</div>
               <p class="card-text mb-auto">{{$sell->description}}</p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continue reading</a>
            </div>
            @php
            $pctr=json_decode($sell->image);

            @endphp
            <img src="{{asset('upload/property/'.$pctr[0]??'')}}" alt="" class="img-a img-fluid">
                </div>
        </div>
   </div>
   @endforeach
   @endisset
   @isset($rentdata)
   @foreach ($rentdata as $data)
   <div class="row">
      <div class="col-md-12">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-primary">{{$data->name}}</strong>
               <h6 class="mb-0">
                 {{$data->area}}
               </h6>
               <div class="mb-1 text-muted small">{{$data->full_rent}}</div>
               <p class="card-text mb-auto">{{$data->description}}</p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continue reading</a>
            </div>
            @php
            $pctr=json_decode($data->picture);

            @endphp
            <img src="{{asset('upload/product/'.$pctr[0]??'')}}" alt="" class="img-a img-fluid">

            {{--  <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/arch" style="width: 200px; height: 250px;">  --}}
         </div>
        </div>
   </div>
   @endforeach
   @endisset
</div>
@endsection

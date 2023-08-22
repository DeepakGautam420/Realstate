@extends('frontend.includes.master')
@section('content')
<div class="container p-5" >
    <form action="{{route('storeSellProperty')}}" method="POST" enctype="multipart/form-data" class="row g-3">
       @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Owner Name</label>
          <input type="text" class="form-control" id="inputEmail4" name="oname">
        </div>
        <div class="col-md-6">
          <label for="number" class="form-label">Mobile</label>
          <input type="number" class="form-control" name="number" id="number">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
        <div class="col-md-6">
            <label for="propertyImage" class="form-label">Property Image</label>
            <input type="file"  class="form-control" name="picture[]" id="propertyImage" multiple>
          </div>
        <div class="col-12">
          <label for="address" class="form-label">Address</label>
          <input type="text" name="address" class="form-control" id="address" >
        </div>
        <div class="col-md-6">
          <label for="city" class="form-label">City</label>
          <input type="text" name="city" class="form-control" id="city">
        </div>
        <div class="col-md-6">
          <label for="locality" class="form-label">Locality</label>
          <input type="text" class="form-control" name="locality" id="locality">
        </div>
        <div class="col-md-6">
          <label for="state" class="form-label">State</label>
          <input type="text" class="form-control" name="state" id="state">
        </div>
        <div class="col-md-6">
          <label for="price" class="form-label">Price</label>
          <input type="text" class="form-control" name="price" id="price">
        </div>
        <div class="col-md-6">
          <label for="area" class="form-label">Area</label>
          <input type="text" class="form-control" name="area" id="area">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Property Description</label>
            <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
          </div>
        {{-- <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div> --}}
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Post Your Property</button>
        </div>
      </form>
</div>
@endsection
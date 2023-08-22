@extends('frontend.includes.master')
@section('content')
{{-- {{$single_pg}} --}}

        <div class="card details-card p-0 mt-5">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <img class="img-fluid details-img" src="https://source.unsplash.com/5Tm4YRqnNcM" alt="">
                </div>
                <div class="col-md-6 col-sm-12 description-container p-5">
                    <div class="main-description">
                        <p class="product-category mb-0">{{$single_pg->for_sale}}</p>
                        <h3>{{$single_pg->name}}</h3>
                        <hr>
                        <p class="product-price">750000</p>

                        <p class="product-category mb-0">Carpet Area 450sqft</p>
                        <p class="product-category mb-0">Super Area 50sqft</p>
                            
                            {{-- <button name="add_to_cart" type="button" class="btn btn-primary btn-lg ">Carpet Area</button>
                            <button name="add_to_cart" type="button" class="btn btn-primary btn-lg">Supre Area</button> --}}
                        
                        <div style="clear:both"></div>

                        <hr>


                        <p class="product-title mt-4 mb-1">About this product</p>
                        <p class="product-description mb-4">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis assumenda voluptatem tempore
                            dolor quod. Expedita, id, minus similique dolor sed adipisci aliquam natus amet doloremque
                            delectus cupiditate? Sint, quasi, ad necessitatibus omnis quaerat tenetur corporis porro aut,
                            natus ex ab id vel odit veniam fugiat temporibus aperiam quia rem minima!
                        </p>

                        <hr>

                        <p class="product-title mt-4 mb-1">Share this product</p>
                        <ul class="social-list">
                            <li><a href="#"><i class="fa-brands fa-facebook"></a></i></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></a></i></li>
                            <li><a href="#"><i class="fa-brands fa-square-instagram"></a></i></li>

                        </ul>






                    </div>




                </div>
            </div>
            <!-- End row -->
        </div>
    @endsection

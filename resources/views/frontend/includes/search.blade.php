 <!-- ======= Intro Section ======= -->

<<<<<<< HEAD
 <div class="p-5" style="background: linear-gradient(to bottom,rgb(251, 251, 249));">
     <div class="d-flex justify-content-center align-items-center">
         <h3 class="p-5">Search Here</h3>
     </div>
=======
 <div class="p-5">
 <div class="d-flex justify-content-center align-items-center">
     <h3 class="p-5">Welcome Back Let's Continue your search</h3>
 </div>
 <div class="d-flex justify-content-center">
     <ul class="d-flex list-unstyled gap-3 ">
         <li class="list-group-item"><a href="">Buy</a></li>
         <li class="list-group-item"><a href="">Rent</a></li>
         <li class="list-group-item"><a href="">PG</a></li>
         <li class="list-group-item"><a href="">Plot</a></li>
         <li class="list-group-item"><a href="">Commercial</a></li>
     </ul>
 </div>
>>>>>>> 19189f53af1f07c0fa254d1a8c75d761447c2e6d

     <form action="{{route('searchProduct')}}" method="post">
        @csrf


     <div class="container  rounded-5 bg-body-tertiary border border-secondary mt-2">
        <div class="text-center">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
               <input type="radio" class="btn-check" name="property" value='for_rent' id="btnradio1" checked>
               <label class="btn btn-outline-primary"  for="btnradio1">Rent/Lease</label>

               <input type="radio" class="btn-check" name="property"  value="for_sale" id="btnradio2">
               <label class="btn btn-outline-primary" for="btnradio2">Sale</label>
            </div>
        </div>
         <div class="row">
             <div class="col-sm-3 d-flex align-items-center p-2 ">
                 <i class="fa-solid fa-location-dot me-3 ms-3"></i>
                 <input type="text" name="name" value="" data-role="tagsinput"
                     class="bg-transparent border-0 w-100 placeholder-lg " style="outline: 0 ;"
                     placeholder="Enter City, Locality, Project" />
                 {{--  <script>
                     $('input').tagsinput({
                         typeahead: {
                             source: function(query) {
                                 return $.getJSON('citynames.json');
                             }
                         }
                     });
                 </script>  --}}
             </div>
             <div class="col-sm-3 d-flex align-items-center p-2">
                 <div class="vr me-3" style="height: 40px;"></div>
                 <i class="fa-solid fa-house"></i>
                 <input type="text" value="" data-role="tagsinput" name="address"
                     class="bg-transparent border-0 w-100 placeholder-lg " style="outline: 0 ;"
                     placeholder="Enter Appartment Type" />
             </div>
             <div class="col-sm-3 d-flex align-items-center p-2">
                 <div class="vr me-3" style="height:40px;"></div>
                 <i class="fa-solid fa-indian-rupee-sign"></i>
                 <input type="text" value="" data-role="tagsinput" name="price"
                     class="bg-transparent border-0 w-100 placeholder-lg " style="outline: 0 ;"
                     placeholder="Enter Ammount" />
             </div>
             <div class="col-sm-3 d-flex text-center p-2 ">
                {{--  <div class="text-center">  --}}
                    <button class="btn btn-success btn-lg col-sm-12"><i class="fa fa-search" aria-hidden="true"></i></button>
                {{--  </div>  --}}
            </div>
         </div>
         <div class="col-sm d-flex pe-0" >
             <div class="vr me-3 mt-2" style="height:40px;"></div>
             <button type="button" class="btn btn-danger w-100" style="border-radius:35px;">Search <i class="fa fa-search" aria-hidden="true"></i></button>

         </div>

     </div>
    </form>
 </div>

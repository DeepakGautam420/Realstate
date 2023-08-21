 <!-- ======= Intro Section ======= -->

 <div class="p-5"
 style="background: linear-gradient(to bottom, rgb(165, 110, 6), rgb(217, 196, 158), #0f9b13);">
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

 <div class="container  rounded-5 bg-body-tertiary border border-secondary">
     <div class="row">
         <div class="col-sm d-flex align-items-center p-2 ">
             <i class="fa-solid fa-location-dot me-3 ms-3"></i>
             <input type="text" value="" data-role="tagsinput"
                 class="bg-transparent border-0 w-100 placeholder-lg " style="outline: 0 ;"
                 placeholder="Enter City, Locality, Project" />
             <script>
                 $('input').tagsinput({
                     typeahead: {
                         source: function(query) {
                             return $.getJSON('citynames.json');
                         }
                     }
                 });
             </script>
         </div>
         <div class="col-sm d-flex align-items-center p-2">
             <div class="vr me-3" style="height: 40px;"></div>
             <i class="fa-solid fa-house"></i>
             <div class="w-100 ms-1">
                 <select class="bg-transparent border-0 w-100" style="outline:0 ; border: 0">
                     <option selected>Flat</option>
                     <option value="1">130299293 $</option>
                     <option value="2">54545154 $</option>
                     <option value="3">5548454 $</option>
                 </select>
             </div>
         </div>
         <div class="col-sm d-flex align-items-center p-2">
             <div class="vr me-3" style="height:40px;"></div>
             <i class="fa-solid fa-indian-rupee-sign"></i>
             <div class="w-100 ms-1">
                 <select class="w-100 bg-transparent border-0" style="outline:none">
                     <option selected>Budget</option>
                     <option value="1">130299293 $</option>
                     <option value="2">54545154 $</option>
                     <option value="3">5548454 $</option>
                 </select>
             </div>
         </div>
     </div>
 </div>
</div>
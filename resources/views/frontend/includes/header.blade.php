 <!-- ======= Header/Navbar ======= -->

 <div class="navbar navbar-default navbar-trans navbar-expand-lg top-navbar-color"
 style="background: linear-gradient(to bottom, rgb(165, 110, 6), rgb(217, 196, 158), #0f9b13);
">
 <div class="p-2 col-sm-6">
     <h2 class="text-white"><a href="{{url('/')}}">MagicBricks</a></h2>
 </div>
 <!-- <div class="justify-content-center" id="navbarDefault">
 <ul class="navbar-nav">
     <li class="nav-item dropdown">
     <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">Banglore</a>
     <div class="dropdown-menu">
         <a class="dropdown-item " href="property-single.html">Property Single</a>
         <a class="dropdown-item " href="blog-single.html">Blog Single</a>
         <a class="dropdown-item " href="agents-grid.html">Agents Grid</a>
         <a class="dropdown-item " href="agent-single.html">Agent Single</a>
     </div>
     </li>
 </ul>
 </div> -->
 <div class="d-flex align-items-center pe-2 col-sm-6 justify-content-end">
     <div class="" id="navbarDefault">
         <ul class="navbar-nav text-end">
             <li class="nav-item dropdown ">
                 <a class="btn btn-danger" href="{{route('userLogin')}}" >Login</a>
             </li>
         </ul>
     </div>
     {{-- <div class="">
         <button class="btn btn-primary " id="post-property-btn">Post a Property</button>
     </div> --}}
 </div>
</div>
<nav class="navbar navbar-default navbar-trans navbar-expand-lg ">

 <div class="container">
     <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
         data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
         aria-label="Toggle navigation">
         <span></span>
         <span></span>
         <span></span>
     </button>
     <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
         <ul class="navbar-nav">
             <li class="nav-item dropdown">
                 <a class="nav-link" href="{{url('/')}}" >Home</a>
                {{--  id="navbarDropdown" role="button"
                     data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                 <div class="dropdown-menu buy-menu-dropdown">
                     <div class="">
                         <a class="dropdown-item" href="property-single.html">Popular Choices</a>
                         <ul class="list-unstyled ms-3 ">
                             <li><a href="">Ready to move</a></li>
                             <li><a href="">Owner Properties</a></li>
                             <li><a href="">Budget Homes</a></li>
                             <li><a href="">Premium Homes</a></li>
                             <li><a href="">Newly Launched</a></li>
                         </ul>
                     </div>
                     <div>
                         <a class="dropdown-item " href="blog-single.html">Property Types</a>
                         <ul class="list-unstyled ms-3">
                             <li><a href="">Flats in Bangalore</a></li>
                             <li><a href="">House for sale in Banglore</a></li>
                             <li><a href="">Villa in Banglore</a></li>
                             <li><a href="">Plot Office in Banglore</a></li>
                             <li><a href="">Office space in Banglore</a></li>
                             <li><a href="">Commercial Space in ..</a></li>
                         </ul>
                     </div>
                     <div>
                         <a class="dropdown-item " href="blog-single.html">Budget</a>
                         <ul class="list-unstyled ms-3">
                             <li><a href="">Ready to move</a></li>
                             <li><a href="">Owner Properties</a></li>
                             <li><a href="">Budget Homes</a></li>
                             <li><a href="">Premium Homes</a></li>
                             <li><a href="">Newly Launched</a></li>
                         </ul>
                     </div>
                     <div>
                         <a class="dropdown-item " href="blog-single.html">Explore</a>
                         <ul class="list-unstyled ms-3">
                             <li><a href="">Ready to move</a></li>
                             <li><a href="">Owner Properties</a></li>
                             <li><a href="">Budget Homes</a></li>
                             <li><a href="">Premium Homes</a></li>
                             <li><a href="">Newly Launched</a></li>
                         </ul>
                     </div>
                     <div>
                         <a class="dropdown-item " href="blog-single.html">Buying Tools</a>
                         <ul class="list-unstyled ms-3">
                             <li><a href="">Ready to move</a></li>
                             <li><a href="">Owner Properties</a></li>
                             <li><a href="">Budget Homes</a></li>
                             <li><a href="">Premium Homes</a></li>
                             <li><a href="">Newly Launched</a></li>
                         </ul>
                     </div>
                 </div> --}}
             </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Property category</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item " href="{{route('rentPropertyList')}}">RENT/LEASE</a>
                  <a class="dropdown-item " href="{{route('pgPropertyList')}}">PG/HOSTEL</a>
                  <a class="dropdown-item " href="{{route('salePropertyList')}}">SALE</a>
                </div>
              </li>
             <li class="nav-item dropdown">
                 <a class="nav-link " href="{{route('sellProperty')}}" >Sell</a>
                 
             </li>

             <li class="nav-item dropdown">
                 <a class="nav-link " href="{{route('aboutUs')}}" >About US</a>
                 
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-link " href="{{route('contactUs')}}" >Contact US</a>
                 
             </li>
         </ul>
     </div>

 </div>
</nav><!-- End Header/Navbar -->
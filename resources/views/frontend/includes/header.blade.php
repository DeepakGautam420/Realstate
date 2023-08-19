<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
        <form class="form-a">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label class="pb-2" for="Type">Keyword</label>
                        <input type="text" class="form-control form-control-lg form-control-a"
                            placeholder="Keyword">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="Type">Type</label>
                        <select class="form-control form-select form-control-a" id="Type">
                            <option>All Type</option>
                            <option>For Rent</option>
                            <option>For Sale</option>
                            <option>Open House</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="city">City</label>
                        <select class="form-control form-select form-control-a" id="city">
                            <option>All City</option>
                            <option>Alabama</option>
                            <option>Arizona</option>
                            <option>California</option>
                            <option>Colorado</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bedrooms">Bedrooms</label>
                        <select class="form-control form-select form-control-a" id="bedrooms">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="garages">Garages</label>
                        <select class="form-control form-select form-control-a" id="garages">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bathrooms">Bathrooms</label>
                        <select class="form-control form-select form-control-a" id="bathrooms">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="price">Min Price</label>
                        <select class="form-control form-select form-control-a" id="price">
                            <option>Unlimite</option>
                            <option>$50,000</option>
                            <option>$100,000</option>
                            <option>$150,000</option>
                            <option>$200,000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-b">Search Property</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Header Section --}}
<div class="navbar navbar-default navbar-trans navbar-expand-lg top-navbar-color"
        style="background-color: rgb(200, 132, 6);">
        <div class="p-2">
            <h2 class="text-white">magicbricks</h2>
        </div>
        <!-- <div class="justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
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
        <div class="d-flex align-items-center pe-2">
            <div class="" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item " href="property-single.html">My Profile</a>
                            <a class="dropdown-item " href="blog-single.html">Blogs</a>
                            <a class="dropdown-item " href="agents-grid.html">Agents</a>
                            <a class="dropdown-item " href="agent-single.html">Agent Single</a>
                            <div class="ps-3">
                                <button class="btn  ">
                                    <a href="{{ route('userLogin') }}" class="text-decoration-none link-hover">Login</a>
                                </button>
                            </div>
                            <div class="d-flex p-3">
                                <p class="" style="font-size: small;">New to <br> MagicBricks?</p>
                                <a class="" style="font-size: small; color: blue;" href="{{ route('userSignUp') }}">SignUp</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="">
                <button class="btn btn-primary " id="post-property-btn">Post a Property</button>
            </div>
        </div>
    </div>

{{-- End Header Section  --}}

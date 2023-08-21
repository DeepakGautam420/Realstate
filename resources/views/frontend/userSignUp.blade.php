<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup - MagicBricks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />


    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #eebb24, #EEBB20, #41ea27, #0f9b13);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>
</head>

<body>
    {{-- <div class="d-flex navbar navbar-default navbar-trans navbar-expand-lg top-navbar-color"
        style="background-color: rgb(200, 132, 6);">
        <div class="" style="padding-left: 8rem;">
            <h2 class=""><a href="index.html" class="text-decoration-none text-white">magicbricks</a></h2>
        </div>
    </div> --}}
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container  h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://i.pinimg.com/736x/0d/cf/b5/0dcfb548989afdf22afff75e2a46a508.jpg" style="width: 50px;" alt="logo">
                                        <h4 class="mt-2 mb-3 pb-1">Sign Up</h4>
                                    </div>

                                    <form>
                                        <p>Please login to your account</p>

                                        <div>
                                            <h6 class="mb-2 pb-1">I am</h6>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="role"
                                                    id="femaleGender" value="Buyer_Owner_Tenant" checked />
                                                <label class="form-check-label"
                                                    for="femaleGender">Buyer/Owner/Tenant</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="maleGender" value="Agent" />
                                                <label class="form-check-label" for="maleGender">Agent</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="otherGender" value="Builder" />
                                                <label class="form-check-label" for="otherGender">Builder</label>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4 mt-4 ">


                                            <input type="text" id="firstName" class="form-control" name="fname"/>
                                            <label class="form-label" for="firstName">Name</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example11" class="form-control" name="email" />
                                            <label class="form-label" for="form2Example11">Email</label>
                                        </div>


                                        <div class="form-outline mb-4">
                                            <input type="tel" id="phoneNumber" class=" form-control" name="number" />
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="phoneNumber" class=" form-control" name="password" />
                                            <label class="form-label" for="phoneNumber">Password</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="button">Login</button>
                                            <a class="text-muted" href="#!">Need Help?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Already User?</p>
                                            <button type="button" class="btn btn-outline-danger"><a href="{{route('userLogin')}}">Login</a></button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const phoneInputField = document.querySelector("#phoneNumber");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript:
                "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

</body>

</html>
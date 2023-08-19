
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

</head>

<body class="" style="background: #007bff;
background: linear-gradient(to right, #0062E6, #33AEFF);">
    <div class="d-flex navbar navbar-default navbar-trans navbar-expand-lg top-navbar-color"
        style="background-color: rgb(200, 132, 6);">
        <div class="" style="padding-left: 8rem;">
            <h2 class="" ><a href="{{ url('') }}" class="text-decoration-none text-white">magicbricks</a></h2>
        </div>
    </div>
    <section class="vh-100 gradient-custom">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center ">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 justify-content-center d-flex">Sign Up</h3>
                            <form method="post" action="{{ route('signUpstore') }}" enctype="multipart/form-data">
                                @csrf
                                {{-- <div class="col-md-7 mb-4">

                                    <h6 class="mb-2 pb-1">I am</h6>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="femaleGender" value="option1" checked />
                                        <label class="form-check-label" for="femaleGender">Buyer/Owner/Tenant</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="maleGender" value="option2" />
                                        <label class="form-check-label" for="maleGender">Agent</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="otherGender" value="option3" />
                                        <label class="form-check-label" for="otherGender">Builder</label>
                                    </div>

                                </div> --}}
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label" for="firstName">Name</label>

                                            <input type="text" id="firstName" name="name" class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="emailAddress">Email</label>
                                            <input type="email" name="email" id="emailAddress"
                                                class="form-control form-control-lg" />

                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="emailAddress">Password</label>
                                            <input type="password" id="emailAddress" name="password"
                                                class="form-control form-control-lg" />

                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                            <input type="number" name="mobile_number" id="phoneNumber"
                                                class=" form-control form-control-lg " />

                                        </div>

                                    </div>
                                </div>
                                <div class="mt-4 pt-2">
                                    <input class="btn btn-danger btn-lg" type="submit" value="Signup" />
                                </div>
                                <div class="d-flex pt-3">
                                    <p class="">Already User?</p>
                                    <div class="ms-2">
                                        <a href="{{ route('userLogin') }}">Login</a>
                                    </div>
                                </div>
                            </form>
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
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - MagicBricks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }

        .btn-google {
            color: white !important;
            background-color: #ea4335;
        }

        .btn-google:hover {
            background-color: #ec7070;
        }

        .btn-facebook {
            color: white !important;
            background-color: #3b5998;
        }

        .btn-facebook:hover {
            background-color: #55b4f4;
        }
    </style>
</head>

<body>
    <div class="d-flex navbar navbar-default navbar-trans navbar-expand-lg top-navbar-color"
        style="background-color: rgb(200, 132, 6);">
        <div class="" style="padding-left: 8rem;">
            <h2 class="" ><a href="{{ url('/') }}" class="text-decoration-none text-white">magicbricks</a></h2>
        </div>
    </div>
    <form action="{{ route('userLogin') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-bolder fs-5">Login</h5>
                        <form>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingInput">
                                <label for="floatingInput">Email .</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingInput">
                                <label for="floatingInput">Password.</label>
                            </div>
                            <div class="d-grid pb-2">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold"
                                    type="submit">Next</button>
                            </div>
                            <div class="float-end ">
                                <a href="">Need Help ?</a>
                            </div>
                            <hr class="my-5">
                            <div class="d-grid mb-2">
                                <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                                    <i class="fab fa-google me-2"></i> Sign in with Google
                                </button>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                                    <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
                                </button>
                            </div>
                        </form>
                        <hr class="my-5">
                        <div class="d-flex">
                            <p class="">New to Magicbricks?</p>
                            <div class="ms-2">
                                <a href="{{ route('userSignUp') }}">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SmartCharge</title>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">
    <link href="./icons/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="./Css/styled.css" rel="stylesheet" type="text/css">
    <script defer src="./js/spine.js"></script>
</head>
</head>

<body>

    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light header d-flex flex-wrap justify-content-between">
            <a class="navbar-brand" href="./index.html">
                <p class="lead ml-md-3 brand-name my-1">SmartCharge</p>
            </a>
        </nav>

        <div class="jumbotron bg-transparent container p-0 mt-2 mt-md-3 mt-lg-4">
            <div class="jumbotron d-flex mb-0 p-2 justify-content-between sign-up-con mx-1">
                <div class="jumbotron bg-secondary col-sm-12 col-md-6 col-lg-6 rounded-0 log-cons mb-0 "
                    style="background-image: url(./images/174007_00_2x.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                </div>


              
                <div class="jumbotron bg-transparent col-sm-12 col-md-6 col-lg-6 pl-0 rounded-0 log-cons mb-0">
                    <div class="form-group col-md-12">
                        <p class="lead mt-0">Log in up to use your Smart account</p>
                    </div>

                    <form>
                        <div class="form-group col-md-9">
                            <p class="text-danger lead mb-2">ERROR HERE</p>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="inputAddress">Username</label>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group col-md-9">
                            <label for="inputEmail4">Password</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mt-3 col-12">
                            <button type="submit" class="btn btn-primary col-5 border-0">Login</button>
                        </div>

                    </form>
                    <div class="form-group col-md-9 m-0">
                        Click here to <a href="#">reset password</a>
                    </div>
                </div>
                <div class="jumbotron bg-transparent col-sm-12 col-md-6 col-lg-6 pl-0 rounded-0 log-cons mb-0 " id="reg-con">
                    <div class="form-group col-md-12 mb-4">
                        <p class="lead mt-0 mb-0">Enter email linked to your account</p>
                        <small class="text-warning">A code will be sent to you</small>
                    </div>

                    <form>
                        <div class="form-group col-md-9">
                            <p class="text-danger lead mb-2">ERROR HERE</p>
                        </div>
                        <div class="form-group col-md-10">
                            <label for="inputAddress">Email</label>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>

                        <div class="form-group mt-3 col-12">
                            <button type="submit" class="btn btn-primary col-4 border-0">Submit</button>
                        </div>

                    </form>
                    <!-- <div class="form-group col-md-9 m-0">
                        Click here to <a href="#">resend code</a>
                    </div> -->
                </div>

                <div class="jumbotron bg-transparent col-sm-12 col-md-6 col-lg-6 pl-0 rounded-0 log-cons mb-0" id="reg-con">
                    <div class="form-group col-md-12 mb-4">
                        <p class="lead mt-0 mb-0">Enter code sent to your email the exact way</p>
                    </div>

                    <form>
                        <div class="form-group col-md-9">
                            <p class="text-danger lead mb-2">ERROR HERE</p>
                        </div>
                        <div class="form-group col-md-10">
                            <label for="inputAddress">Enter code</label>
                            <input type="text" class="form-control" placeholder="Code">
                        </div>

                        <div class="form-group mt-3 col-12">
                            <button type="submit" class="btn btn-primary col-4 border-0">Submit</button>
                        </div>

                    </form>
                    <div class="form-group col-md-9 m-0">
                        Click here to <a href="#">resend code</a>
                    </div>
                </div>

                <div class="jumbotron bg-transparent col-sm-12 col-md-6 col-lg-6 pl-0 rounded-0 log-cons mb-0" id="reg-con">
                    <div class="form-group col-md-12">
                        <p class="lead mt-0">Reset Password and Login to use your Smart account</p>
                    </div>

                    <form>
                        <div class="form-group col-md-9">
                            <p class="text-danger lead mb-2">ERROR HERE</p>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="inputEmail4">New Password</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="form-group col-md-9">
                            <label for="inputEmail4">Confirm Password</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mt-3 col-12">
                            <button type="submit" class="btn btn-primary col-5 border-0">Reset</button>
                        </div>

                    </form>
                </div>


            </div>
        </div>
        <div class="footer-copyright bg-transparent text-center mt-3 py-3">© 2020 Copyright:
            <a href="#"> Company.com</a>
        </div>
    </div>

</body>

</html>
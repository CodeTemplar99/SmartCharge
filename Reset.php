<?php

$errorMsgs = array('email' =>'');

if(isset($_POST['linkToMail'])){


    // prevent XSS attacks
  function X_XSS($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

    if(empty($_POST['recoveryEmail'])){

        $errorMsgs['email'] = 'your email address is required';
    }
    else{
         $resetEmailAddress = X_XSS($_POST['recoveryEmail']);
        if(!filter_var($resetEmailAddress, FILTER_VALIDATE_EMAIL)){
            $errorMsgs['email'] ='email must be a valid email address';
        }

        else{

         echo "<script language='javascript'>
         window.location='./hello.php';
        </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
include ('./php/header_land.php');

?>
        <div class="jumbotron bg-transparent container p-0 mt-2 mt-md-3 mt-lg-4">
            <div class="jumbotron d-flex mb-0 p-2 justify-content-between sign-up-con mx-1">
                <div class="jumbotron bg-secondary col-sm-12 col-md-6 col-lg-6 rounded-0 log-cons mb-0 "
                    style="background-image: url(./images/174007_00_2x.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                </div>

                <div class="jumbotron bg-transparent col-sm-12 col-md-6 col-lg-6 pl-0 rounded-0 log-cons mb-0 ">
                    <div class="form-group col-md-12 mb-4">
                        <p class="lead mt-0 mb-0">Enter email linked to your account</p>
                        <small class="text-warning">A verification will be sent to your mail</small>
                    </div>

                    <form action="Reset.php" method="POST">
                        <div class="form-group col-md-9">
                        </div>
                        <div class="form-group col-md-10">
                            <label for="inputAddress">Email</label>
                            <p class="text-danger lead m-0 font-italic"><?php echo $errorMsgs['email'] ?></p>
                            <input type="text" class="form-control" placeholder="Email" name="recoveryEmail">
                        </div>

                        <div class="form-group mt-3 col-12">
                            <button type="submit" class="btn btn-primary col-4 border-0" name="linkToMail">Submit</button>
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
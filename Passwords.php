<?php

$errorMsgs = array('newPassword' =>'', 'confirmNewPassword' => '');

if(isset($_POST['resetNow'])){


    // prevent XSS attacks
  function X_XSS($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

    if(empty($_POST['inputNewPassword'])){

        $errorMsgs['newPassword'] = 'your new password is required';
    }
    else{
         $passwordNew = X_XSS($_POST['inputNewPassword']);
        if(!filter_var($passwordNew, FILTER_VALIDATE_EMAIL)){
            $errorMsgs['code'] ='enter code in the exact format sent to you';
        }

    }
    
    if(empty($_POST['confirmNewPassword'])){

        $errorMsgs['confirmNewPassword'] = 'password confirmation is required';
    }
    else{
         $newInputPassword = X_XSS($_POST['confirmNewPassword']); {
             
        if($_POST['inputNewPassword'] !== $_POST['confirmNewPassword']){
            $errorMsgs ['confirmNewPassword'] ='password mismatch';
        }

        else{
             echo "<script language='javascript'>
         window.location='./login.php';
        </script>";
        }
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

               
                <div class="jumbotron bg-transparent col-sm-12 col-md-6 col-lg-6 pl-0 rounded-0 log-cons mb-0">
                    <div class="form-group col-md-12">
                        <p class="lead mt-0">Reset Password and Login to use your Smart account</p>
                    </div>

                    <form action="Passwords.php" method="POST"> 
                        <div class="form-group col-md-9">
                        </div>
                        <div class="form-group col-md-9">
                            <label for="inputEmail4">New Password</label>
                            <p class="text-danger lead m-0 font-italic"><?php echo $errorMsgs['newPassword'] ?></p>
                            <input type="password" class="form-control" placeholder="new password" name="inputNewPassword">
                        </div>

                        <div class="form-group col-md-9">
                            <label for="inputEmail4">Confirm Password</label>
                            <p class="text-danger lead m-0 font-italic"><?php echo $errorMsgs['confirmNewPassword'] ?></p>
                            <input type="password" class="form-control" placeholder="confirm password" name="confirmNewPassword">
                        </div>
                        <div class="form-group mt-3 col-12">
                            <button type="submit" class="btn btn-primary col-5 border-0" name="resetNow">Reset</button>
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
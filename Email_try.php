<?php
$errorText = ' ';

if(isset($_POST['checkMail'])){

    if(empty($_POST['inputEmail'])){
        $errorText = 'Enter your email below to continue';
    }

    else{
        $errorText = '';
     

   $email = $_POST['inputEmail'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
 echo "<script language='javascript'>
window.location='./checkMail.php';
        </script>";
        }
        else{
            
            $errorText ='Enter a valid email address';
        }
        
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<?php
include ('./php/header_land.php');
// require ('php/Server/checkMail.php');


 echo "<script language='javascript'>

document.querySelector('#top-sign-btn').style.display='none' ;
        </script>";
?>

        <div class="jumbotron bg-transparent container p-0 mt-2 mt-md-3 mt-lg-4">
            <div class="jumbotron d-flex mb-0 p-2 justify-content-between sign-up-con mx-1">
                <div class="jumbotron bg-secondary col-sm-12 col-md-6 col-lg-6 rounded-0 log-cons mb-0 "
                    style="background-image: url(./images/174007_00_2x.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                </div>

                <div class="jumbotron bg-transparent col-sm-12 col-md-6 col-lg-6 pl-0 rounded-0 log-cons mb-0"  id="checkMail">
                    <div class="form-group col-md-12">
                        <p class="lead mt-0">Enter your email that it will be verified</p>
                    </div>

                    <form action="email_try.php" method="POST" >
                        <div class="form-group col-md-9">
                            <p class="text-danger lead mb-2"> <?php echo $errorText ?></p>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="inputEmail">Email</label>
                            <input type="text" class="form-control" placeholder="Enter email" name="inputEmail">
                        </div>

                           <div class="form-group mt-3 col-12">
                            <button type="submit" name="checkMail" class="btn btn-primary col-4 border-0">Submit</button>
                        </div>
                    </form>
                    <div class="form-group col-md-9 m-0">
                        Click here to <a class="text-info" href="./login.html">Login</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-copyright bg-transparent text-center mt-3 py-3">© 2020 Copyright:
            <a href="#"> Company.com</a>
        </div>
    </div>

    
</body>

</html>

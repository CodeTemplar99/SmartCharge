

<!DOCTYPE html>
<html lang="en">

<?php
include ('./php/header_land.php');
// require ('php/Server/checkMail.php');
?>

<?php
$errorText = ' ';

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
                    <div class="form-group col-lg-12 pr-0">
                        <p class="lead mt-0 mx-lg-auto">A code has been sent to your mail, visit your mail and click on the link to complete your Sign up or copy the sent link to your address bar to visit</p>
                        <span class="text-warning">Link will expire in 10 minutes</span>

                          <div class="form-group p-0 mt-lg-4 m-0">
                        Click here to <a href="./login.php">login</a> instead
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
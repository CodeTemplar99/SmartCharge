<?php

$errorMsgs = array('username' =>'','password' =>'','confirmPassword' =>'','address' =>'','city' =>'','state' =>'', );

// check if form is submitted
if(isset($_POST['signUp'])){

    // prevent XSS attacks
function X_XSS($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

    if(empty($_POST['inputUserName'])){
        $errorMsgs['username'] = 'username is required';

        echo "
        <script type ='text/javascript'>
        
        console.log('hello');
        </script>
        ";
    }

    else{
       $newUserName = X_XSS($_POST['inputUserName']);
        if(!preg_match('/^[a-zA-Z\s]+$/', $newUserName)){

            $errorMsgs ['username'] ='Username must contain only letters and spaces';
        }
        
    }

    
    if(empty($_POST['inputPassword'])){

        $errorMsgs['password'] = 'password is required';
    }
    else{
         $newInputPassword = X_XSS($_POST['inputPassword']);
        if(!preg_match('/[a-zA-Z]/', $newInputPassword)){
            $errorMsgs ['password'] ='password must not contain spaces, special characters and symbols';
        }
    }
      
    if(empty($_POST['confirmPassword'])){
        $errorMsgs['confirmPassword'] = 'confirmation is required';
    }
    else{
         $newConfirmPassword = X_XSS($_POST['confirmPassword']);
        if($_POST['confirmPassword'] !== $_POST['inputPassword']){

            $errorMsgs ['confirmPassword'] ='password mismatch';
        }
    }
    
      
    if(empty($_POST['inputAddress'])){

        $errorMsgs['address'] = 'address is required';
    }
    else{
         $newInputAddress = X_XSS($_POST['inputAddress']);
        if(!preg_match('/[a-zA-Z\s]/', $newInputAddress)){

            $errorMsgs ['address'] ='address must not contain special characters and symbols';
        }
    }

     
    if(empty($_POST['inputCity'])){

        $errorMsgs['city'] = 'city is required';
    }
    else{
         $newInputCity = X_XSS($_POST['inputCity']);
        if(!preg_match('/[a-zA-Z\s]/', $newInputCity)){

            $errorMsgs ['address'] ='address must not contain special characters and symbols';
        }
    }
    
      
    if(empty($_POST['selectState'])){
        $errorMsgs['state'] = 'state is required';
    }

    else{
        $selectState = $_POST['selectState'];  // Storing Selected Value In Variable
    }
    
    
}


?>


<!DOCTYPE html>
<html lang="en">
<?php
include ('./php/header_land.php')
?>
   
        <div class="jumbotron bg-transparent container p-0 mt-2 mt-md-3 mt-lg-4">
            <div class="jumbotron d-flex mb-0 p-2 justify-content-between sign-up-con mx-1">
                <div class="jumbotron bg-secondary col-sm-12 col-md-6 col-lg-6 rounded-0 log-cons mb-0 "
                    style="background-image: url(./images/174007_00_2x.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                </div>


                <div class="jumbotron bg-transparent col-sm-12 col-md-6 col-lg-6 rounded-0 log-cons mb-0">
                    <p class="lead mt-0">Sign up to <span class="brand-mention">SmartCharge</span></p>
                    <form action="./Signup.php" method="POST">
                        <div class="form-group">
                            <label for="inputAddress">Username</label>
                        <p class="text-danger lead mb-1 font-italic"><?php echo $errorMsgs['username'] ?></p>
                            <input type="text" class="form-control" placeholder="Username" name="inputUserName">
                        </div>
                        <div class="form-row">
                        <p class="text-danger lead mb-2"></p>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Password</label>
                        <p class="text-danger lead m-0 font-italic"><?php echo $errorMsgs['password'] ?></p>
                                <input type="password" class="form-control" placeholder="Password" name="inputPassword">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4"> Confirm Password</label>
                        <p class="text-danger lead m-0 font-italic"><?php echo $errorMsgs['confirmPassword'] ?></p>
                                <input type="password" class="form-control"
                                    placeholder="Confirm Password" name="confirmPassword">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress2">Address</label>
                        <p class="text-danger lead m-0 font-italic"><?php echo $errorMsgs['address'] ?></p>
                            <input type="text" class="form-control"
                                placeholder="Apartment, street, or floor" name="inputAddress">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="inputCity">City</label>
                        <p class="text-danger lead m-0 font-italic"><?php echo $errorMsgs['city'] ?></p>
                                <input type="text" class="form-control" placeholder="City" name="inputCity">
                            </div>

                             <div class="form-group col-lg-6">
                                 <label for="inputState">State</label>
                        <p class="text-danger lead m-0 font-italic"><?php echo $errorMsgs['state'] ?></p>
                            <select  class="form-control col-sm-12 col-md-12 col-lg-12" name="selectState">
                                <option value="">Choose state</option>
                                <option value="1">...</option>
                                <option value="2">...</option>
                                <option value="3">...</option>
                                <option value="4">...</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary col-5 border-0" name="signUp">Sign up</button>
                        </div>
                    </form>
                    <div class="form-group p-0 m-0">
                        Click here to <a href="./login.php">login</a>
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
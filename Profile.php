<!DOCTYPE html>
<html lang="en">

<?php
include ('php/header.php')
?>

        <div class="container p-2">
            <p class="lead m-0 page-indicator">Home/Profile</p>
        </div>

        <div class="jumbotron container p-2 bg-transparent">
            <div class="jumbotron p-1">
                <div class="jumbotron p-2 mb-0 d-flex justify-content-between profile-top">
                    <div
                        class="jumbotron rounded-0 bg-secondary col-lg-3 d-flex justify-content-center profile-pic-con">
                        <i class="fa fa-user" id="profile-pic"></i>
                    </div>
                    <div class="jumbotron rounded-0 bg-white col-lg-9 pt-4 d-flex flex-column">
                        <ul class="list-group">
                            <li class="list-group-item p-1 border-0"><span class="lead">Name: </span>
                                <span class="lead">Dapibus ac facilisis in</span>
                            </li>
                            <li class="list-group-item p-1 border-0"><span>Contact:</span>
                                <span>Dapibus ac facilisis in</span></li>
                            <li class="list-group-item p-1 border-0"><span>Joined on: </span>
                                <span>Dapibus ac facilisis in</span></li>

                        </ul>
                    </div>
                </div>
                <div class="jumbotron px-4 p-0 m-0 d-flex justify-content-between">
                    <p class="lead m-0">Transaction Details</p>
                    <p><i class="fa fa-pencil-alt"></i> <span>edit</span></p>
                </div>
                <div class="jumbotron p-2 mt-0">
                    <ul class="list-group">
                        <li class="list-group-item"><i class="fa fa-building"></i><span> Bank Name:</span> <span>Lorem
                                ipsum dolor sit.</span></li>
                        <li class="list-group-item"><i class="fa fa-credit-card"></i> <span>Account Number:
                            </span><span>Lorem ipsum</span></li>
                        <li class="list-group-item disabled" aria-disabled="true">*** if you change your bank or account
                            number you'll still be required to pay a non-refundable test fee of N50 to confirm the
                            account ***</li>

                    </ul>

                    <div class="jumbotron p-3 bg-white">
                        <div class="jumbotron p-2 pl-3 m-0 mb-3 bg-transparent">
                            <p class="lead m-0">Change Account Details</p>
                        </div>
                        <form class="col-lg-5">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Bank Name</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Account Number</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary border-0 col-lg-4">Update</button>
                        </form>
                    </div>

                </div>
                <div class="jumbotron px-4 p-0 m-0 d-flex justify-content-between">
                    <p class="lead m-0">Security</p>
                    <p><i class="fa fa-pencil-alt"></i> <span>edit</span></p>
                </div>
                <div class="jumbotron p-2 mt-0 mb-1">
                    <ul class="list-group">
                        <li class="list-group-item"><i class="fa fa-key"></i> <span>Password:</span>
                            <span>XXXXXXX</span></li>

                    </ul>

                </div>
                <div class="jumbotron p-3 bg-white">
                    <div class="jumbotron p-2 pl-3 m-0 mb-3 bg-transparent">
                        <p class="lead m-0">Change Password</p>
                        <small class="form-text text-danger ml-1 mt-2">ERROR HERE</small>
                    </div>
                    <form class="col-lg-5">
                        <div class="form-group">
                            <label for="exampleInputPassword1">New Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary border-0 col-lg-4">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="footer-copyright text-center py-3 mt-5 fixed-bottom">© 2020 Copyright:
        <a href="#"> Company.com</a>
    </div>
    </div>

    <script defer src="./js/spine.js"></script>
</body>

</html>
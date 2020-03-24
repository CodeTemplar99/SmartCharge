<!DOCTYPE html>
<html lang="en">

<?php
include ('./php/header_land.php')
?>
        <div class="container p-2 col-8">
        </div>

        <div class="jumbotron container p-2 bg-transparent">
            <div class="jumbotron bg-warning d-flex justify-content-around p-1 landing-ad"
                style="background-image: url(./images/174007_00_2x.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">

            </div>

            <div class="jumbotron p-3 mb-2" id="sign-in-con">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNumber">Number</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputNetwork">Network</label>
                            <div class="jumbotron bg-white p-2 m-0">
                                <span class="text-muted">network will display here</span>
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputAMount">Amount</label>
                            <input type="number" min="50" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn">Recharge now</button>
                </form>
            </div>
        </div>

    </div>

    <div class="footer-copyright text-center py-3 fixed-bottom">© 2020 Copyright:
        <a href="#"> Company.com</a>
    </div>
    </div>


</body>

</html>
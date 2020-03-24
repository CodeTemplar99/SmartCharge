<!DOCT.phptm.phptml lang="en">

<?php
include ('php/header.php')
?>
<div class="container p-2 indicator-con">
    <p class="lead m-0 page-indicator">Home/</p> 
</div>

<div class="jumbotron container p-2 bg-transparent">
    <div class="jumbotron bg-transparent d-flex justify-content-around p-1 mb-2 dash-board">
        <div class="jumbotron boxes col-4" id="Cash_info_box">
            <hr>
            <p class="text-left cash-info-intro">CHARGE WORTH</p>
            <p class="text-center lead cash-display"> ₦ 1,668.96<br></p>
            <hr>
            <p class="text-center cash-info-intro">CASH BALANCE<br>
                <span class="lead cash-display">₦ 384.96</span></p>
            <div class="jumbotron bg-transparent m-0 p-0 d-flex justify-content-center">
                <button class="btn col-7">Withdraw</button>
            </div>
        </div>
        <div class="jumbotron boxes p-2 col-7 d-flex" id="network_box">
            <div class="list-group m-0  col-sm-12 col-md-8 col-lg-8">
                <a href="#" class="list-group-item list-group-item-action m-0 mb-0 p-0 border-0">
                    <small class="text-black">Recent Transactions</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action m-0 mb-1 p-1">
                    <div class="d-flex w-100 justify-content-between m-0 p-0">
                        <h6 class="m-0">08123456789</h6>
                        <small class="text-muted">N100</small>
                    </div>
                    <small class="text-muted">04/07/20</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action m-0 mb-1 p-1">
                    <div class="d-flex w-100 justify-content-between m-0 p-0">
                        <h6 class="m-0">08123456789</h6>
                        <small class="text-muted">N100</small>
                    </div>
                    <small class="text-muted">04/07/20</small>
                </a><a href="#" class="list-group-item list-group-item-action m-0 mb-1 p-1">
                    <div class="d-flex w-100 justify-content-between m-0 p-0">
                        <h6 class="m-0">08123456789</h6>
                        <small class="text-muted">N100</small>
                    </div>
                    <small class="text-muted">04/07/20</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action m-0 mb-1 p-1">
                    <div class="d-flex w-100 justify-content-between m-0 p-0">
                        <h6 class="m-0">08123456789</h6>
                        <small class="text-muted">N100</small>
                    </div>
                    <small class="text-muted">04/07/20</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action m-0 mb-1 p-1">
                    <div class="d-flex w-100 justify-content-between m-0 p-0">
                        <h6 class="m-0">08123456789</h6>
                        <small class="text-muted">N100</small>
                    </div>
                    <small class="text-muted">04/07/20</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action m-0 mb-0 p-1">
                    <div class="d-flex w-100 justify-content-between m-0 p-0">
                        <h6 class="m-0">08123456789</h6>
                        <small class="text-muted">N100</small>
                    </div>
                    <small class="text-muted ">04/07/20</small>
                </a>
                <a href="./Transactions.php" class="list-group-item list-group-item-action m-0 mb-1 p-0 border-0">
                    <p class="text-black text-center m-0">See More</p>
                </a>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Search</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Number">
                <small id="emailHelp" class="form-text text-muted">Enter a number to see
                    transaction</small>
            </div>
        </div>
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

<script defer src="./js/spine.js"></script>
</body>.phptml>
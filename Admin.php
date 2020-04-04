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
    <script defer src="./js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script defer src="./js/spine.js" type="text/javascript"></script>
</head>

<body>

    <div class="container-fluid p-0 m-0 fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light header d-flex flex-wrap justify-content-between">
            <a class="navbar-brand" href="./index.html">
                <p class="lead ml-md-3 brand-name my-0">SmartCharge</p>
            </a>
        </nav>

<div class="jumbotron d-flex justify-content-md-between bg-white p-2 indicator-con m-0 rounded-0 border-bottom">
    <p class="lead m-0 ml-lg-5 text-black-50">Admin Dashboard/</p>
     <div class="form-group col-lg-2 m-0">
      <select id="inputState" class="form-control">
        <option selected>Today</option>
        <option>Yesterday</option>
        <option>This Week</option>
        <option>This Month</option>
      </select>
    </div>
</div>
<div class="jumbotron bg-white container-fluid p-0 m-0 rounded-0">
 <div class="d-flex justify-content-between p-2 flex-wrap flex-row">
  <div class="jumbotron bg-white border rounded-0 py-2 px-4 dash-tab d-flex justify-content-lg-around align-items-md-center">
  <i class="fa fa-link fa-2x mr-2"></i> <div> <p class="lead mb-0 figures">30,000</p>
  <span class="text-capitalize small">total Visit</span>
  </div>
 </div>
 <div class="jumbotron bg-white border rounded-0 py-2 px-4 dash-tab d-flex justify-content-lg-around align-items-md-center">
 <i class="fa fa-sign-in-alt fa-2x mr-2"></i> <div> <p class="lead mb-0 figures">10,056</p>
  <span class="text-capitalize small">total login</span>
  </div>
 </div>
 <div class="jumbotron bg-white border rounded-0 py-2 px-4 dash-tab d-flex justify-content-lg-around align-items-md-center">
 <i class="fa fa-download fa-2x mr-2"></i> <div> <p class="lead mb-0 figures">N25,000.00</p>
  <span class="text-capitalize small">total Credit</span>
  </div>
 </div>
 <div class="jumbotron bg-white border rounded-0 py-2 px-4 dash-tab d-flex justify-content-lg-around align-items-md-center">
 <i class="fa fa-dollar-sign fa-2x mr-2"></i> <div> <p class="lead mb-0 figures">N9,000.00</p>
  <span class="text-capitalize small">total Payout</span>
  </div>
 </div>
 <div class="jumbotron bg-white border rounded-0 py-2 px-4 dash-tab d-flex justify-content-lg-around align-items-md-center">
 <i class="fa fa-money-bill-alt fa-2x mr-2"></i> <div> <p class="lead mb-0 figures">N6,000.00</p>
  <span class="text-capitalize small">Gross Profit</span>
  </div>
 </div>
</div>
<hr>
 <div class="row d-flex justify-content-around p-2 m-0">
  <div class="jumbotron bg-white border p-2 mx-5 col-lg-3 bigger-tabs">
  <p class="lead text-capitalize mb-0">Location Rate</p>
  <p class="small text-capitalize text-muted mb-2">this rating is based on the 24hrs performance</p>

  <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action ">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="m-0">Enugu</h5>
      <span class="text-success font-weight-bold">30%</span>
    </div>
  </a>
   <a href="#" class="list-group-item list-group-item-action ">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="m-0">Delta</h5>
      <span class="text-success font-weight-bold">3%</span>
    </div>
  </a>
   <a href="#" class="list-group-item list-group-item-action ">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="m-0">Enugu</h5>
      <span class="text-success font-weight-bold">30%</span>
    </div>
  </a>
   <a href="#" class="list-group-item list-group-item-action ">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="m-0">Delta</h5>
      <span class="text-success font-weight-bold">3%</span>
    </div>
  </a>
   <a href="#" class="list-group-item list-group-item-action ">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="m-0">Enugu</h5>
      <span class="text-success font-weight-bold">30%</span>
    </div>
  </a>
   <a href="#" class="list-group-item list-group-item-action ">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="m-0">Delta</h5>
      <span class="text-success font-weight-bold">3%</span>
    </div>
  </a>

</div>
  </div>
  <div class="jumbotron bg-white border p-2 mx-5 col-lg-3 bigger-tabs">
  
  <p class="lead text-capitalize mb-0">Quantity Rate</p>
  <p class="small text-capitalize text-muted mb-2">this rating is based on the 24hrs performance</p>

<p class="small m-0">MTN</p>
<div class="progress mb-3" style="height:25px">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
</div>
<p class="small m-0">AIRTEL</p>
<div class="progress mb-3" style="height:25px">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<p class="small m-0">GLO</p>
<div class="progress mb-3" style="height:25px">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
</div>
<p class="small m-0">9MOBILE</p>
<div class="progress mb-3" style="height:25px">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
</div>
  </div>

  <div class="jumbotron bg-white border p-2 mx-5 col-lg-3 bigger-tabs">
  
  
  <p class="lead text-capitalize mb-0">Sales Rate</p>
  <p class="small text-capitalize text-muted mb-2">this rating is based on the 24hrs performance</p>
  <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action mb-3">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="m-0">Avg.sale/ second</h5>
      <span class="text-success font-weight-bold">N80.38</span>
    </div>
  </a>
   <a href="#" class="list-group-item list-group-item-action mb-3">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="m-0">Avg.sale/ minute</h5>
      <span class="text-success font-weight-bold">N200</span>
    </div>
  </a>
   <a href="#" class="list-group-item list-group-item-action mb-3">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="m-0">Avg.sale/ hour</h5>
      <span class="text-success font-weight-bold">N5000</span>
    </div>
  </a>
</div>
  </div>
 </div>

 <div class="footer-copyright text-center py-3 fixed-bottom">© 2020 Copyright:
    <a href="#"> Company.com</a>
 </div>
</div>


<script defer src="./js/spine.js"></script>
</body>

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
    <link href="Css/styled.css" rel="stylesheet" type="text/css">
    <script defer src="./js/jquery-3.4.1.min.js"></script>
</head>
</head>

<body>


    <div class="container-fluid  p-0">
        <nav class="navbar navbar-expand-lg navbar-light header">
            <a class="navbar-brand" href="./index.php">
                <p class="lead ml-md-3 brand-name my-1">SmartCharge</p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" onclick="showBar()" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul>
                <ul class="navbar-nav    mr-auto mt-2 mt-lg-0">
                    <li class="nav-item  mx-5">
                        <a class="nav-link nav-text" href="./index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item  mx-5">
                        <a class="nav-link nav-text" href="./Transactions.php">Transactions</a>
                    </li>
                    <li class="nav-item  mx-5">
                        <a class="nav-link nav-text" href="./shop.php">Market</a>
                    </li>
                    <li class="nav-item  mx-5">
                        <a class="nav-link nav-text" href="./About.php">About</a>
                    </li>
                    <li class="nav-item  mx-5 dropdown" id="hover-spot">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" onmouseover="showBoard()"
                            onmouseout="hideBoard()" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-user-circle"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="jumbotron position-absolute p-1 hover-board bg-light shadow-lg" onmouseover="showBoard()"
            onmouseout="hideBoard()">
            <ul class="list-group">
                <a href="./Profile.php" class="list-group-item bg-transparent mb-3 rounded-lg p-1">
                    <span class="m-1"><i class="fa fa-user"></i><span> profile</span></span>
                </a>
                <a href="./Messages.php" class="list-group-item bg-transparent mb-3 rounded-lg p-1">
                    <span class="m-1"><i class="fa fa-envelope"></i><span> message</span></span>
                </a>
                <a href="./Contact.php" class="list-group-item bg-transparent mb-3 rounded-lg p-1">
                    <span class="m-1"><i class="fa fa-comment-alt"></i><span> contact us</span></span>
                </a>
                <a href="./login.php" class="list-group-item bg-transparent mb-3 rounded-lg p-1">
                    <span class="m-1"><i class="fa fa-sign-out-alt"></i><span> logout</span></span>
                </a>
            </ul>
        </div>


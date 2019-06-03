
 


<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Barry Kinder Fitness full weekly class schedule. Includes times, locations and maps. Choose a class that suits you, classes in Blackpool, Bispham, Cleveleys, Fleetwood, Hambleton.">
    <title>Class Timetable, Barry Kinder Fitness.</title>
    <title>BKFitness</title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107696283-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-107696283-1');
    </script>
 
    <link rel="shortcut icon" href="images/favicon.ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
        crossorigin="anonymous" integrity="sha256-eSi1q2PG6J7g7ib17yAaWMcrr5GrtohYChqibrV7PBE=" />

    <link rel="stylesheet" href="site.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link href="https://fonts.googleapis.com/css?family=Thasadith:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace&display=swap" rel="stylesheet">
    <link href="webfontkit/stylesheet.css" rel="stylesheet">
    
</head>


<nav class="navbar navbar-expand-lg">

    <a class="navbar-brand" asp-area="" asp-controller="Product" asp-action="Create"><img src="images/bklogo2.png"
            width="200px" id="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">Settings<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="">Create Product</a></li>
                    <li class="divider"></li>
                    <li><a href="">Create Product</a></li>
                    <li class="divider"></li>
                    <li><a href="">Create Product</a></li>
                    <li class="divider"></li>
                    <li><a href="">Create Product</a></li>
            </li>

        </ul>
        </li>
        </li>
        <li class="nav-item">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Class Details<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="https://localhost:5001/Product/Detail?id=2">Zumba Fitness</a></li>
                <li class="divider"></li>
                <li><a href="https://localhost:5001/Product/Detail?id=3">Zumba Gold</a></li>
                <li class="divider"></li>
                <li><a href="https://localhost:5001/Product/Detail?id=4">Clubbercise</a></li>
                <li class="divider"></li>
                <li><a href="https://localhost:5001/Product/Detail?id=5">MashUp</a></li>
                <li class="divider"></li>
                <li><a href="https://localhost:5001/Product/Detail?id=6">Pound Fitness</a></li>
                <li class="divider"></li>
                <li><a href="https://localhost:5001/Product/Detail?id=7">Sosa Fitness </a></li>
            </ul>
        </li>
        </li>

        <li class="nav-item" id="tt">

            <a href="BKFitness/TimeTable">Timetable</a>
        </li>
        <li class="nav-item">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Useful<b class="caret"></b></a>
            <ul class="dropdown-menu">

                <li><a href="BKFitness/About.php">About</a></li>
                <li class="divider"></li>
                <li><a href="BKFitness/Events.php">Events</a></li>
                <li class="divider"></li>
                <li><a href="BKFitness/Transformations.php">Transformations</a></li>
                <li class="divider"></li>

                <li><a href="BKFitness/Contact">Contact</a></li>
                <li class="divider"></li>
                <li><a asp-area="" asp-controller="Home" asp-action="Privacy">Privacy</a></li>
            </ul>
        </li>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto" style="margin-right: 3%;">
                    <a href="#" data-toggle="modal" data-target="#myModal"> <li class="nav-item"> Log In <i class="fas fa-sign-in-alt"></i></li></a>
      &nbsp; &nbsp;  <a href="register.php"> <li class="nav-item"> Register <i class="fas fa-user-plus"></i></li></a>

        </ul>
    </div>
</nav>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content text-center">

      <!-- Modal Header -->
      <div class="modal-header text-center" style="background-color: black; border-bottom: 3px solid purple;">
        <h1 class="modal-title">Barry Kinder Fitness</h1>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" style="background-color: black; border-bottom: 3px solid purple;">
      <form action="register.php" method="POST">
                            <br>
							<input type="email" name="log_email" placeholder="Email address" value="<?php
							if(isset($_SESSION['reg_email'])) {
								echo $_SESSION['reg_email'];
							}
						?>" required>
							<br>
                            <br>
							<input type="password" name="log_password" placeholder="Password" style="margin-bottom: 2%;">
							<br>
                            <br>
							<?php if(in_array("Email or password is incorrect<br>", $error_array)) echo "Email or password is incorrect<br>"; ?>
							<input  style="background-color: purple; border: 0; color: white; width: 30%; padding: 1%;" class="reg-btn btn-primary" type="submit" name="login_button" value="Login">
							<br>
							<br>

							<a href="register.php" id="signup" class="signup" style="color: white;">Need an account? Register here</a>
						</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer" style="background-color: black; border-top: 1px solid purple;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
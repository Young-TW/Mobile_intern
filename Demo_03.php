<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demo Program 03</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm  bg-primary navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php" style="padding: 8px;">
    <img src="Resource/Image/Monster_Logo.png" alt="logo" style="width:45px; " >
  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Home Work
            </a>
            <div class="dropdown-menu">
            <a href="Homework_03.php" >Home Work 03</a><br>
            <a >Home Work 04</a>
            <a >Home Work 05</a>
            <a >Home Work 06</a>
            <a >PHP_Email</a>
            
			</div>
        </li>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Demo
            </a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="Demo_03.php">Demo 03</a>
            <a class="dropdown-item" href="Demo_04.php">Demo 04</a>
            <a class="dropdown-item" href="Demo_05.php">Demo 05</a>
            <a class="dropdown-item" href="Demo_06.php">Demo 06</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            WebRTC Sample
            </a>
            <div class="dropdown-menu">
				<a class="dropdown-item" href="/WebRTC_Sample/canvas">canvas</a>
				<a class="dropdown-item" href="/WebRTC_Sample/gum">Camera Test</a>
				<a class="dropdown-item" href="/WebRTC_Sample/filter">Picture filter</a>
			</div>
       </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Barcode Reader
            </a>
            <div class="dropdown-menu">
				<a class="dropdown-item" href="1D2D_Code.php">1D2D Barcode</a>
			</div>
       </li>
    </ul>
  </div>  
</nav>
<?php
	//require_once 'navbar.php';
?>

<div class="jumbotron text-center"  style="padding-left:16px; position: relative; top: 69px;">
  <h1>小伊 (ELEVEN)</h1>
  <p>Millie Bobby Brown (born 19 February 2004) is a British actress, model, and producer. She gained recognition for playing Eleven in the Netflix science fiction series Stranger Things.for which she received two Primetime Emmy Award nominations and two Screen Actors Guild Award nominations.</p> 
</div>
<form class = "container-fluid" action="Demo_03.php" method="post">
	<div class="container-fluid" style="position: relative; top: 60px;">
	  <div class="row">
		<div class="col-sm-4">
		  <h3 class="">Profile</h3>        
			<img class="img-fluid mx-auto d-block" src="Resource/Image/Millie.jpg" alt="ELEVEN" width = "300px" > 

		</div> 
		<div class="col-sm-4">
			<h3 class="mt-3 ">個人資料</h3>
			<div class = "row mb-2">
				<div class="col-sm-4 display-4">
				<h5>姓 :</h5>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="surname" name = "surname" value = "Bobby Brown">
				</div>
			</div>
			<div class = "row mb-2">
				<div class="col-sm-4 display-4">
				<h5>名 :</h5>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="givenname" name = "givenname" value = "Millie">
				</div>
			</div>
		</div>
		<div class="col-sm-4">
		  <h3 class="mt-3">聯絡資料</h3>
			<div class = "row mb-2">
				<div class="col-sm-4 display-4">
				<h5>地址 :</h5>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="Address" name = "Address" value = "台南市永康區中山南路193號">
				</div>
			</div>
			<div class = "row mb-2">
				<div class="col-sm-4 display-4">
				<h5>電話 :</h5>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="Tel" name = "Tel" value = "06-2322131">
				</div>
			</div>
		</div>
	  </div>
	</div>
</form>

<p></p>
</body>
</html>
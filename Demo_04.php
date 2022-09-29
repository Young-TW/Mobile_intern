<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demo 04</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<?php
	require_once 'navbar.php';
?>

<?php
//*
	$Lengend_Color = "text-body";
	if (isset($_POST["gender"]))
	{
		printf("gender is %s \n",  $_POST['gender']);
		if (strcmp($_POST["gender"], "Female") == 0) {
			$Lengend_Color = "text-danger";
		}
		else if (strcmp($_POST["gender"], "Male") == 0) {
			$Lengend_Color = "text-primary";
		}
	}
//*/
?>

<div class="jumbotron text-center <?php print($Lengend_Color); ?>"  style="padding-left:16px; position: relative; top: 69px;">
  <h1 id= "Jumbotron_Title" >麥克·威勒 (Mike Wheeler)</h1>
  <p id="Jumbotron_Introduction" >Finn Wolfhard (born December 23, 2002) is a Canadian actor and musician. He gained recognition for playing Mike Wheeler in the Netflix series Stranger Things (2016–present)</p> 
</div>
<form class = "container-fluid" action="Demo_04.php" method="post">
	<div class="container-fluid" style="position: relative; top: 60px;">
<?php
	if (isset($_POST["surname"]))
	{
		printf("surname is %s <br>",  $_POST['surname']);
	}
	if (isset($_POST["givenname"]))
	{
		printf("givenname is %s <br>",  $_POST['givenname']);
	}
	if (isset($_POST["gender"]))
	{
		printf("gender is %s <br>",  $_POST['gender']);
	}
	if (isset($_POST["birthday"]))
	{
		printf("birthday is %s <br>",  $_POST['birthday']);
	}
	if (isset($_POST["Address"]))
	{
		printf("Address is %s <br>",  $_POST['Address']);
	}
	if (isset($_POST["ResidenceAddress"]))
	{
		printf("ResidenceAddress is %s <br>",  $_POST['ResidenceAddress']);
	}
	if (isset($_POST["CorrespondenceAddress"]))
	{
		printf("CorrespondenceAddress is %s <br>",  $_POST['CorrespondenceAddress']);
	}
	if (isset($_POST["Tel"]))
	{
		printf("Tel is %s <br>",  $_POST['Tel']);
	}
	if (isset($_POST["Mobile"]))
	{
		printf("Mobile is %s <br>",  $_POST['Mobile']);
	}
	
?>
	  <div class="row">
		<div class="col-sm-4">
		  <h3 class="text-warning">Profile</h3>        
			<img class="img-fluid mx-auto d-block" src="Resource/Image/Finn_Wolfhard.jpg" alt="Professor" width = "300px" > 

		</div> 
		<div class=" col-sm-4">
			<h3 class="text-warning mt-3 ">個人資料</h3>
			<div class = "row mb-2">
				<div class="col-sm-5 display-4">
				<h5>姓* :</h5>
				</div>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="surname" name = "surname" value = "<?php isset($_POST["surname"])?  printf($_POST["surname"]) : printf("")?>" required>
				</div>
			</div>
			<div class = "row mb-2">
				<div class="col-sm-5 display-4">
				<h5>名 :</h5>
				</div>
				<div class="col-sm-7">
					<?php if (isset($_POST["givenname"])) :?>
						<input type="text" class="form-control" id="givenname" name = "givenname" value = "<?php printf($_POST["givenname"]) ?>" >
					<?php else :?>
						<input type="text" class="form-control" id="givenname" name = "givenname" >
					<?php endif ?>
				</div>
			</div>
			<div class = "row mb-2">
				<div class="col-sm-5 display-4">
				<h5>性別* :</h5>
				</div>
				<div class="col-sm-7">
					<!-- <input type="text" class="form-control" id="gender" name = "gender" value = "Femal"> -->
					<select name="gender" class="custom-select form-control " required>
						<option value = "" selected></option>
						<option value="Female" <?php strcmp($_POST["gender"], "Female") == 0 ?  printf("selected") : printf("")?> >Female</option>
						<option value="Male" <?php strcmp($_POST["gender"], "Male") == 0 ?  printf("selected") : printf("")?>>Male</option>
						<option value="X" <?php strcmp($_POST["gender"], "X") == 0 ?  printf("selected") : printf("")?> >X</option>
					</select>
				</div>
			</div>

			<div class = "row mb-2">
				<div class="col-sm-5 display-4">
				<h5>生日 :</h5>
				</div>
				<div class="col-sm-7">
					<input type="date" class="form-control" id="birthday" name = "birthday" value = "<?php isset($_POST["birthday"])?  printf($_POST["birthday"]) : printf("")?>"><?php //printf(date("Y-m-d")); ?>
				</div>
			</div>

		</div>
		<div class="col-sm-4">
		  <h3 class="text-warning mt-3">聯絡資料</h3>
			<div class = "row mb-2">
				<div class="col-sm-5 display-4">
				<h5>地址 :</h5>
				</div>
				<div class="col-sm-7">
					<div class = "row">
						<div class = "col-sm-12">
							<input type="text" class="form-control" id="Address" name = "Address" value = "<?php isset($_POST["Address"])?  printf($_POST["Address"]) : printf("")?>">
						</div>
					</div>
					<div class = "row">
						<div class = "col-sm-6">
							<div class="custom-control custom-checkbox m-1">
							  <input type="checkbox" class="custom-control-input" id="ResidenceAddress" name="ResidenceAddress" <?php strcmp($_POST["ResidenceAddress"], "on") == 0 ?  printf("checked") : printf("")?> >
							  <label class="custom-control-label" for="ResidenceAddress">戶籍地址</label>
							</div>
						</div>
						<div class = "col-sm-6">
							<div class="custom-control custom-checkbox m-1">
							  <input type="checkbox" class="custom-control-input" id="CorrespondenceAddress" name="CorrespondenceAddress" <?php strcmp($_POST["CorrespondenceAddress"], "on") == 0 ?  printf("checked") : printf("")?> >
							  <label class="custom-control-label" for="CorrespondenceAddress">通訊地址</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class = "row mb-2">
				<div class="col-sm-5 display-4">
				<h5>電話 :</h5>
				</div>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="Tel" name = "Tel" placeholder="06-232-2131" pattern="(\d{2,3}-?|\(\d{2,3}\))\d{3,4}-?\d{4}|09\d{2}(\d{6}|-\d{3}-\d{3})" value = "<?php isset($_POST["Tel"])?  printf($_POST["Tel"]) : printf("")?>">
				</div>
			</div>
			<div class = "row mb-2">
				<div class="col-sm-5 display-4">
				<h5>行動電話 :</h5>
				</div>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="Mobile" name = "Mobile" placeholder="0912-456-789" pattern="(\d{2,3}-?|\(\d{2,3}\))\d{3,4}-?\d{4}|09\d{2}(\d{6}|-\d{3}-\d{3})" value = "<?php isset($_POST["Mobile"])?  printf($_POST["Mobile"]) : printf("")?>">
				</div>
			</div>			

		</div>
	  </div>
	</div>
	
	<div class="row" style="position: relative; top: 80px;">
		<div class = "col-sm-4" >
			
		</div>
		<div class = "col-sm-4" >
			<input type="submit" class="btn btn-success btn-block mt-2 mb-2" value="確定">
			<!-- <a href="Homework_03.php">
			   <input type="button" class="btn btn-danger  col-sm-5" value="取消" >
			</a>
			  -->
		</div>
		<div class = "col-sm-4" >
			<input type="reset" class="btn btn-danger btn-block mt-2 mb-2" value="取消">
			
		</div>
	</div>
</form>

<p></p>

<script>

</script>

</body>
</html>
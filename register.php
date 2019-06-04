<!doctype html>
<?php
include('inc/dbconnect.inc.php');
include('inc/form_handlers/register_handler.php');
include('inc/form_handlers/login_handler.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to BK Fitness</title>


	<style>
a {
	color: white;
}
hr {
	border-top: 3px solid purple;
}
	</style>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
</head>

<body>
<?php include 'inc/nav.php' ?>
	<?php
	//if(isset($_POST['register_button'])) {
		//echo '
		// <script>
		// 	$(document).ready(function() {
		// 		$("#first").hide();
		// 		$("#second").show();
		// 	});
		// </script>
	// 	';
	// }
	// ?> 

	<div class="container-fluid splash-left">
		<div class="row">
			<div class="col-md-4 offset-md-4 text-center login-box"
				style="background-color: #0e1111; border: 0 !important; border-radius: 25px; opacity: 0.8; margin-top: 7%; padding-top: 2%;">
				<h1 id="reghead">
					Barry Kinder Fitness
				</h1>
				<br/>
					<h3 class="regis-header" style="color: white;"><strong>Create Account</strong></h3>
					<hr/>
		


					<!--register form-->
				
						<form action="register.php" method="POST">
							<input type="text" name="reg_fname" placeholder="First Name" value="<?php
							if(isset($_SESSION['reg_fname'])) {
								echo $_SESSION['reg_fname'];
							}
						?>" required>
							<br>
							<br>
							<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) 
									echo "Your first name must be between 2 and 25 characters<br>"; ?>
							<input type="text" name="reg_lname" placeholder="Last Name" value="<?php
							if(isset($_SESSION['reg_lname'])) {
								echo $_SESSION['reg_lname'];
							}
						?>" required>
							<br>
							<br>
							<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>
							<input type="email" name="reg_email" placeholder="Email" value="<?php
							if(isset($_SESSION['reg_email'])) {
								echo $_SESSION['reg_email'];
							}
						?>" required>
							<br>
							<br>
							<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php
							if(isset($_SESSION['reg_email2'])) {
								echo $_SESSION['reg_email2'];
							}
						?>" required>
							<br>
							<br>
							<?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>";
						else if(in_array("Invalid format<br>", $error_array)) echo "Invalid format<br>";
						else if(in_array("Emails do not match<br>", $error_array)) echo "Emails do not match<br>"; ?>


							<input type="password" name="reg_password" placeholder="Password" required>
							<br>
							<br>
							<input type="password" name="reg_password2" placeholder="Confirm Password" required>
							<br/>
							<br/>
							<?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>";
						else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
						else if(in_array("Your password must be between 5 and 30 characters<br>", $error_array)) echo "Your password must be between 5 and 30 characters<br>"; ?>

							<label><input class="confirm" type="checkbox" name="confirm-check" label="I agree to the terms and conditions" required>&nbsp;<span style="color: white;">I agree to the </span><a  target="_blank" href="terms.php">
								<span style="color: pink;">terms and conditions</span></a></label>
							<br/>
							<hr/>

							<input style="width: 30%;" class="btn btn-default reglogbtn" type="submit" name="" value="Register"><br/>

							<?php if(in_array("<span style='color: orange;'>You are now registered. Please login!</span><br>", $error_array)) echo "<span style='color: aqua;'>You are now registered. Please login!</span><br>"; ?>
							<br>
							
							<a href="#" data-toggle="modal" data-target="#myModal" id="signin" class="signin" style="color: white;">Already have an account? Log in here</a>

						</form>
					<br>
					<br>

				</div>
			
			</div>
		</div>
		<?php include 'inc/footer.php' ?>
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"
			crossorigin="anonymous" integrity="sha256-E/V4cWE4qvAeO5MOhjtGtqDzPndRO1LBk8lJ/PR7CA4=">
		</script>

</body>
</html>
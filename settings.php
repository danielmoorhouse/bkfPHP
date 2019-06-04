<?php
include("inc/header.php");
include("inc/form_handlers/settings_handler.php");
?>

<style>
input {
	color: black;
}
i {
	float: right;
}
.cross {
	color: red;
	font-size: 20px;
}
.fa-plus-circle {
	color: white;
}
.set-head {
    color: white;
}
.setform {
    color: white;
}

</style>
<?php include 'inc/nav.php' ?>
<div class="container-fluid splash-left2">
	
	<h1 class="splash-msg" style="margin-left: 10%; margin-bottom: 3%; padding-top: 2%;">#AccountSettings//</h1>

	<div class="row">

		<div class="col-md-4 "></div>
<div class="col-md-4 setting-field">


	<br>

		


	</div>
	</div>

<!--Form to change account details-->




		<div class="row">
            
			<div class="col-md-4 offset-md-2 text-center">
            <h2 class="set-head" style=" border-radius: 25px;
		 	padding: 0%; margin-bottom: 5%; opacity: 0.7;" class="wow fadeIn"  data-wow-duration="1s" data-wow-delay="1.2s">
			<strong>Change Profile Image</strong><a href="#" id="show"></a></h2>
			

	<?php
	echo "<img width='200px' class='img-responsive' src='" . $user['profile_pic'] ."' id='small_profile_pics'>";//display current profile picture
	?>
	<br>




	<br>
       <!--upload new picture to folder and change url in users table-->
	<?php
	if ( isset( $_POST[ 'post' ] ) ) {
	$uploadOk = 1;
	$imageName = $_FILES[ 'fileToUpload' ][ 'name' ]; //set image name to variable
	$errorMessage = "";
	if ( $imageName != "" ) {
		$targetDir = "images/profile-pics/"; //set target directory
		$imageName = $targetDir . uniqid() . basename( $imageName ); //set target path and filename. uniqid gives each file a unique name to avoid duplicates
		$imageFileType = pathinfo( $imageName, PATHINFO_EXTENSION );
		if ( $_FILES[ 'fileToUpload' ][ 'size' ] > 10000000 ) {
			$errorMessage = "Sorry your file is too large";//check max file size
			$uploadOk = 0;
		}
		if ( strtolower( $imageFileType ) != "jpeg" && strtolower( $imageFileType ) != "png" && strtolower( $imageFileType ) != "jpg" ) {//change filename to lower case
			$errorMessage = "Sorry, only jpeg, jpg and png files are allowed";
			$uploadOk = 0;
		}
		if ( $uploadOk ) {
			if ( move_uploaded_file( $_FILES[ 'fileToUpload' ][ 'tmp_name' ], $imageName ) ) {
				//image uploaded okay
			} else {
				//image did not upload
				$uploadOk = 0;
			}
		}
	}
		//Insert image into database
		$insert_pic_query = mysqli_query($con, "UPDATE users SET profile_pic='$imageName' WHERE username='$userLoggedIn'");
		header("Location: ".$userLoggedIn);
	if ( $uploadOk ) {
		$post = new Post( $con, $userLoggedIn );
		$post->submitPost( $_POST[ 'post_text' ], 'none', $imageName );
	} else {
		echo "<div style='text-align:center;' class='alert alert-danger'>
				$errorMessage
			</div>";
	}
}
    //set varibale names so we can fetch current user data
	$user_data_query = mysqli_query($con, "SELECT first_name, last_name, email FROM users WHERE username='$userLoggedIn'");
	$row = mysqli_fetch_array($user_data_query);
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email'];
	$profilePic = $row['profile_pic']
	?>
                	<!--Form to submit profile pic-->
	<form action="settings.php" method="POST" enctype="multipart/form-data">


<input style="background-color: #494949; color: white; border: 0;" type="file" name="fileToUpload" class="fileToUpload" id="fileToUpload">

<input style="background-color: #14f702; color: white; border: 0;" type="submit" name="post" id="post_button" value="Change Picture">




</form>
            </div>
			<div class="col-md-4 setting-field text-center" style="color: black;">
				<h2 class="set-head" style=" border-radius: 25px; padding: 0%;
				     margin-bottom: 3%; opacity: 0.7;" class="wow fadeIn"  data-wow-duration="1s" data-wow-delay="1.5 s">
                    <strong>Change Account Details</strong><a href="#" id="show1"></a></h2>
                    
                    <form action="settings.php" method="POST">
								<span class="setform">First Name </span> <br/><br/><input  type="text" name="first_name" value="<?php echo $first_name; ?>">
							<br/>	<br/><span class="setform">Last Name </span><br/><br/>
								<input type="text" name="last_name" value="<?php echo $last_name; ?>">
								<br/>	<br/><span class="setform">Email </span><br/><br/>
								<input type="text" name="email" value="<?php echo $email; ?>">
       <br/>
			<?php echo $message; ?>
<br/>
			<input style="background-color: #14f702; color: white; border: 0;" type="submit" name="update_details" id="save_details" value="Update Details">
     
		 </form>
				</div>
            </div>


	<hr/>

<br/>



		<div class="row">
		
			<div class="col-md-4 offset-md-2 text-center">
				<h2 class="set-head" style="
				 margin-bottom: 4%; opacity: 0.8;">
					<strong>Change Password</strong><a href="#" id="show2"></a></h2>


		<form action="settings.php" method="POST">
			<span class="setform">	Old Password</span> <br/> <br/><input type="password" name="old_password">
		<br/>	<br/><span class="setform">	New Password</span> <br/> <br/>
			<input type="password" name="new_password_1"><br/><br/>
			<span class="setform">Confirm	New Password</span> <br/> <br/><input type="password" name="new_password_2">
			<?php echo $password_message; ?>
<br/><br/>
			<input style="background-color: #14f702; color: white; border: 0;" type="submit" name="update_password" id="save_details" value="Update Password"><br>
<br/><a href="#" id="hide2"></a>
	






	</form>
</div>

		<div class="col-md-4 text-center">
	<!--Close account form-->
	<h2 class="set-head" style="border-radius: 25px; padding: 0%; margin-bottom: 8%; text-align: center; opacity: 0.7;">
		<strong>Close Your Account</strong><a href="#" id="show3"></a></h2>
		<div id="close">
	<form action="settings.php" method="POST">
		<p style="color: white;">Click the button to close your <span style="color: white;"><strong>BK Fitness</strong></span> account. Your account will be deactivated but you can log back into your account anytime to re-activate your account.</p>

		<input style="background-color: red; color: white; border: 0;" type="submit" name="close_account" id="close_account" value="Close Account">
		<br/><a href="#" id="hide3"></a>

	</form>
</div>
</div>
</div>
	<br>

</div>
<?php include 'inc/footer.php' ?>
<?php

	require'includes/connect.php';
	session_start();


	if(isset($_SESSION['username'])){
		header('Location: index.php');
	}

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  
  
  
      <link rel="stylesheet" href="css1/style.css">

  
</head>

<body>
  <body>
<div class="container">
	<section id="content">
		<form action="" method="POST">
			<h1>Registration</h1>
			<div>
				<input type="text" placeholder="Name" required="" name="nm" />
			</div>
			<div>
				<input type="text" placeholder="Username" required="" name="username" />
			</div>
			<div>
				<input type="text" placeholder="Email" required="" name="email" />
			</div>
			<div>
				<input type="text" placeholder="Date of Birth" required="" name="dob" />
			</div>
			
			<div>
				<input type="text" placeholder="Contact" required="" name="phone" />
			</div>
			<div>
				<input type="text" placeholder="Gender" required="" name="gender" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password" />
			</div>
			
			<div>	
				<input name ="Register" type="submit" value="Register" />
			</div>
<div><a href="login.php">Already have Account, <b>login</b></a>
</div>
		
		</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->
</body>
  
    <script  src="js1/index.js"></script>

<?php
	if(isset($_POST['Register']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['nm']) && isset($_POST['gender']) && isset($_POST['phone']) && isset($_POST['dob']) && isset($_POST['email'])){

		$nam = $_POST['nm'];
		$password = $_POST['password'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$contact = $_POST['phone'];
		$gender = $_POST['gender'];
		$DOB = $_POST['dob'];

		$sql = "INSERT INTO login values(NULL,'$username','$password','nam','email','contact','gender','DOB')";
		
		if(($result = $db->query($sql)) == TRUE){
echo '<script type="text/javascript">alert("Registered Successfully!");</script>';

			header("Location: index.php");			
			

		} else {
echo '<script type="text/javascript">alert("Not Regestered,Probably Sql Error!");</script>';
		}

	}

?>
</body>
</html>
